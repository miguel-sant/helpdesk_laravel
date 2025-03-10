<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SlackService
{
    protected $client;
    protected $token;

    public function __construct()
    {
        $this->client = new Client();
        $this->token = env('SLACK_BOT_TOKEN'); // Token do Slack
    }

    /**
     * Envia uma mensagem para um canal no Slack.
     */
    public function sendMessage($channel, $message)
    {
        $response = $this->client->post('https://slack.com/api/chat.postMessage', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'channel' => $channel,
                'text' => $message,
            ],
        ]);

        return json_decode($response->getBody(), true);
    }

    /**
     * Busca mensagens de um canal no Slack.
     */
    public function fetchMessages($channel, $limit = 10)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('SLACK_BOT_TOKEN'),
            'Content-Type' => 'application/json',
        ])->get('https://slack.com/api/conversations.history', [
            'channel' => $channel,
            'limit' => $limit,
        ]);
        $data = $response->json();

        if (isset($data['error'])) {
            Log::error('Erro ao buscar mensagens do Slack: ' . $data['error']);
        }

        return $data;
    }

    public function enviarMensagem()
    {
        $slackService = new SlackService();
        $response = $slackService->sendMessage('#geral', 'Olá, Slack! Esta é uma mensagem do Laravel.');

        return response()->json($response);
    }

    public function buscarMensagens()
    {
        $slackService = new SlackService();
        $messages = $slackService->fetchMessages('#geral', 10); // Busca as últimas 10 mensagens

        return response()->json($messages);
    }
}
