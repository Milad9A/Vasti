<?php

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('/bot/getupdates', function () {
//    $updates = Telegram::getUpdates();
//    $update = Telegram::commandsHandler(true);
//    return (json_encode($updates));
//});
//
//Route::post('bot/sendmessage', function () {
//    Telegram::sendMessage([
//        'chat_id' => '1381151594',
//        'text' => 'Hello world!'
//    ]);
//    return;
//});
