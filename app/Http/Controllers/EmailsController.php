<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class EmailsController extends Controller
{
    public function handleForm(Request $request)
    {

        $this->validate($request, ['name' => 'required', 'email' => 'required|email', 'message_body' => 'required']);

        $data = ['name' => $request->get('name') , 'email' => $request->get('email') , 'messageBody' => $request->get('message_body') ];

        Mail::send('emails.email', $data, function ($message) use ($data)
        {
            $message->from($data['email'], $data['name']);
            $message->to('vasti@gmail.com', 'Admin')
                ->subject('Contact Us');
        });

        return redirect()
            ->back()
            ->with('success', 'Thank you for your feedback');

    }
}
