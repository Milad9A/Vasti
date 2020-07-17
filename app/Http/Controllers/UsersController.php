<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        return view('site.user.profile', compact('user'));
    }

    public function edit()
    {
        $user = auth()->user();
        return view('site.user.edit', compact('user'));
    }
}
