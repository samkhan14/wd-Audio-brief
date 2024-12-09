<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class OpenAIService
{
    protected $client;
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('OPENAI_API_KEY');
        $this->baseUrl = env('OPENAI_BASE_URL');
    }

    public function transcribeAudio($audioPath)
    {
        $endpoint = '/audio/transcriptions';

        // Try to open the file
        $file = fopen($audioPath, 'r');
        if ($file === false) {
            // Log and handle the error if fopen failed
            Log::error("Failed to open audio file: " . $audioPath);
            return null;
        }

        try {
           // dd($this->apiKey, $audioPath, $this->baseUrl . $endpoint);
            $response = $this->client->post($this->baseUrl . $endpoint, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                ],
                'multipart' => [
                    [
                        'name' => 'file',
                        'contents' => $file,
                        'filename' => basename($audioPath),
                    ],
                    [
                        'name' => 'model',
                        'contents' => 'whisper-1',
                    ],
                ],
            ]);

           // dd($response->getBody()->getContents());

            // Decode and return the transcription text
            return json_decode($response->getBody()->getContents(), true)['text'] ?? null;
        } catch (\Exception $e) {
            Log::error("Error transcribing audio: " . $e->getMessage());
            return null;
        } finally {
            // Ensure the file is closed only if it was opened successfully
            if (is_resource($file)) {
                fclose($file);
            }
        }
    }


    public function generateQuestions($briefText)
{
    $endpoint = '/chat/completions';
    try {
        $response = $this->client->post($this->baseUrl . $endpoint, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'gpt-4o',
                'messages' => [
                    ['role' => 'system', 'content' => 'You are an AI that generates questions based on a brief for web design, website development, logo and digital marketing services.'],
                    ['role' => 'user', 'content' => "Please generate relevant questions based on the following brief. Only provide questions without any sections, titles, or numbers:\n\n" . $briefText],
                ],
                'max_tokens' => 500,
            ],
        ]);

        // Extract the content and clean up any formatting
        $content = json_decode($response->getBody()->getContents(), true)['choices'][0]['message']['content'];
        $questions = array_filter(array_map('trim', explode("\n", $content)), fn($q) => !empty($q));

        return ['questions' => array_values($questions), 'message' => count($questions) === 0 ? 'No questions generated. Please try again.' : null];

    } catch (\Exception $e) {
        Log::error("Error generating questions with GPT: " . $e->getMessage());
        return ['questions' => ['An error occurred while generating questions. Please try again.'], 'message' => ''];
    }
}


}
