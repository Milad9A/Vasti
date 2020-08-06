<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram;

class TelegramController extends Controller
{
    public function tt()
    {
        // $response = Telegram::getUpdates();
        $updates = Telegram::getWebhookUpdates();
        return $updates;
        $last_update = last($updates);

        $chat_id = $last_update->message->chat->id;
        $client = new \GuzzleHttp\Client();


        $response = $client->request('POST', 'https://api.telegram.org/bot1381151594:AAELMugxWHx8Jv-uvMFSj5U5NtRtMZbtwnU/sendMessage', [
            'form_params' => [
                'chat_id' => $chat_id,
                'text' => 'd',
            ],
        ]);
    }
}
