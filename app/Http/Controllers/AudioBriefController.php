<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OpenAIService;
use App\Services\AudioService;
use App\Services\SessionService;
use Illuminate\Support\Facades\Log;
use App\Models\Brief;
use Illuminate\Support\Facades\Validator;
use Exception;

class AudioBriefController extends Controller
{
    protected $openAIService;
    protected $audioService;
    protected $sessionService;

    public function __construct(OpenAIService $openAIService, AudioService $audioService, SessionService $sessionService)
    {
        $this->openAIService = $openAIService;
        $this->audioService = $audioService;
        $this->sessionService = $sessionService;
    }

    public function analyzeAudio(Request $request)
    {
        if (!$request->hasFile('audio')) {
            return response()->json(['error' => 'No audio file uploaded'], 400);
        }

        $request->validate([
            'audio' => 'required|mimes:flac,m4a,mp3,mp4,mpeg,mpga,oga,ogg,wav,webm|max:10240',
        ]);

        try {
            $audioPath = $this->audioService->storeAudio($request->file('audio'));
            $transcribedText = $this->openAIService->transcribeAudio($audioPath);
            if (!$transcribedText) {
                return response()->json(['error' => 'Error transcribing audio'], 500);
            }

            $this->sessionService->storeBrief($transcribedText);
            $questions = $this->openAIService->generateQuestions($transcribedText);
           // dd($questions);
            $this->audioService->deleteAudio($audioPath);
            $this->sessionService->storeQuestions($questions);

            return response()->json(['questions' => $questions]);

        } catch (Exception $e) {
            Log::error('Error processing audio: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while processing the audio.'], 500);
        }
    }

    public function submitAnswer(Request $request)
    {

        $request->validate([
            'audio' => 'required|mimes:flac,m4a,mp3,mp4,mpeg,mpga,oga,ogg,wav,webm|max:10240',
            'question_index' => 'required|integer',
        ]);

        $sessionData = $this->sessionService->getSessionData();

        // Check if the current question index is valid
        if (!isset($sessionData['questions']['questions'][$sessionData['currentQuestionIndex']])) {
            return response()->json(['error' => 'Invalid question index'], 400);
        }

        try {
            $audioPath = $this->audioService->storeAudio($request->file('audio'));
            $transcribedText = $this->openAIService->transcribeAudio($audioPath);
            $this->audioService->deleteAudio($audioPath);

            if (!$transcribedText) {
                return response()->json(['error' => 'Error transcribing audio'], 500);
            }

            // Save the answer for the current question
            $this->sessionService->updateResponses(
                $sessionData['currentQuestionIndex'],
                $sessionData['questions']['questions'][$sessionData['currentQuestionIndex']],
                $transcribedText
            );

            // Increment question index
            $this->sessionService->incrementQuestionIndex();

            // Refresh session data to get updated responses and index
            $sessionData = $this->sessionService->getSessionData();

            if ($sessionData['currentQuestionIndex'] < count($sessionData['questions']['questions'])) {
                return response()->json([
                    'nextQuestion' => $sessionData['questions']['questions'][$sessionData['currentQuestionIndex']],
                    'answers' => $sessionData['responses']
                ]);
            } else {
                $this->sessionService->clearSessionData();
                return response()->json(['status' => 'complete', 'responses' => $sessionData['responses']]);
            }
        } catch (\Exception $e) {
            Log::error('Error processing answer: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while processing the answer'], 500);
        }
    }


}
