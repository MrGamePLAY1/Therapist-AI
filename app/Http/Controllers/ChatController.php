<?php
// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function sendMessage(Request $request)
    {
        $messageText = $request->input('message');
        $apiKey = config('services.openai.api_key');
        $assistantId = 'asst_at8tz6KvsUo0vwSsRHvDVXTY';

        $response = Http::withOptions([
            'verify' => 'C:\xampp\apache\bin\curl-ca-bundle.crt',
        ])->withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'As an empathetic emotional therapist, you provide support to help users navigate challenging emotions, maintaining a calm, compassionate, and non-judgmental tone. Actively listen, validate feelings, and offer reassurance without minimizing emotions. Share insights or coping strategies only when requested, using reflective listening and evidence-based techniques like mindfulness. Avoid medical, legal, or diagnostic advice, and gently encourage professional help if necessary. Be mindful of cultural and personal contexts, respect the user\'s autonomy, and avoid assumptions. Start with an empathetic greeting, let the user lead the conversation, and end with positive reinforcement to create a safe, supportive space for emotional well-being.'
                ],
                [
                    'role' => 'user',
                    'content' => $messageText
                ]
            ],
            'max_tokens' => 150,
            'temperature' => 0.7,
        ]);

        return response()->json($response->json());
    }
}