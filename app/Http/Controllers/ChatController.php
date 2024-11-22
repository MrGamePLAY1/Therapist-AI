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

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
        ])->post('https://api.openai.com/v1/engines/davinci-codex/completions', [
            'prompt' => "You are a therapist. Respond to the following message: {$messageText}",
            'max_tokens' => 150,
            'n' => 1,
            'stop' => null,
            'temperature' => 0.7,
        ]);

        return response()->json($response->json());
    }
}