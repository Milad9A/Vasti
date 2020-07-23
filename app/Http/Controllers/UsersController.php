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

    public function update()
    {
        $user = auth()->user();
        $user->update(request()->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'bio' => '',
        ]));
        if ($image = request()->file('image')) {
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $filepath = request()->file('image')->storeAs('profiles', $imageName, 'public');
            $user->update([
                'image' => $filepath,
            ]);
        }
        return redirect(route('site.user.profile'));
    }

    public function updatePassword()
    {
        $user = auth()->user();
        request()->validate([
            'oldPassword' => 'required|password|string|min:8',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user->update([
           'password' => bcrypt(request()->password),
        ]);
        return redirect(route('site.user.profile'));
    }
}
