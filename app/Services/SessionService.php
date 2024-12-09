<?php

namespace App\Services;
use Illuminate\Support\Facades\Session;

class SessionService
{
    public function storeBrief($transcribedText)
    {
        Session::put('full_brief', $transcribedText);
    }

    public function storeQuestions(array $questions)
    {
        session(['questions' => $questions, 'currentQuestionIndex' => 0, 'responses' => []]);
    }

    public function getSessionData()
    {
        return [
            'questions' => session('questions', []),
            'currentQuestionIndex' => session('currentQuestionIndex', 0),
            'responses' => session('responses', [])
        ];
    }

    public function updateResponses($index, $question, $answer)
    {
        $responses = session('responses', []);
        $responses[$index] = compact('question', 'answer');
        session(['responses' => $responses]);
    }

    public function incrementQuestionIndex()
    {
        session(['currentQuestionIndex' => session('currentQuestionIndex', 0) + 1]);
    }

    public function clearSessionData()
    {
        session()->forget(['questions', 'currentQuestionIndex', 'responses']);
    }

}
