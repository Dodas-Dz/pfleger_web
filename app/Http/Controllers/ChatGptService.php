<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatGptService
{
    protected $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => 'https://api.openai.com/v1/',
            'headers' => [
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function askToChatGpt(Request $request)
    {


        $message = "Geben Sie mir Pflegeplanung für " . $request->name . ". Er wurde geboren am " . $request->Geburtsdatum . ". Jahre alt und hat folgende Diagnosen: " . $request->Diagnosen . ". Als Pflegebedarf wurde festgestellt: " . $request->Pflegebedarf . ". Verfügbares Pflegepersonal: " . $request->Verfugbares . "ohne Patienteninformation  bitte.";



        $response = $this->httpClient->post('chat/completions', [
            'json' => [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'system', 'content' => 'You are'],
                    ['role' => 'user', 'content' => $message],
                ],
            ],
        ]);

        $responseData = json_decode($response->getBody(), true);

        // Accéder au contenu du premier choix du message
        $content = $responseData['choices'][0]['message']['content'];

        // Retourner la vue avec le contenu extrait
        return view('user.resultat', ['content' => $content, 'request' => $request]);

    }
}
