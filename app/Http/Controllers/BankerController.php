<?php

namespace App\Http\Controllers;

class BankerController extends Controller
{
    public function login()
    {
        $total = request()->total;

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'http://banker.test:10080/api/login', [
            'form_params' => [
                'email' => $attributes['email'],
                'password' => $attributes['password'],
            ]
        ]);

        $token = json_decode($response->getBody())->access_token;

        return view('site.cart.confirm', compact('token', 'total'));
    }

    public function purchase()
    {
        $total = request()->total;
        $client = new \GuzzleHttp\Client();
        $headers = [
            'Authorization' => 'Bearer ' . request()->token,
            'Accept' => 'application/json',
        ];
        $client->request('POST', 'http://banker.test:10080/api/payments/make', [
            'headers' => $headers,
            'form_params' => [
                'account_id' => 1,
                'payment_amount' => $total,
            ],
        ]);
        auth()->user()->cart()->update(['checked_out' => 1]);
        return redirect('/');
    }

}
