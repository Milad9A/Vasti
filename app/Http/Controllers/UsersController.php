<?php

namespace App\Http\Controllers;

use App\Status;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function profile(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $books = User::where('id', $id)->firstOrFail()->books();

        if ($request->has('status')) {
            $status_id = Status::where('name', request('status'))->firstOrFail()->id;
            $sid = $user->status->pluck('pivot')->where('status_id', $status_id)->pluck('book_id');
            $books->whereIn('books.id', $sid);
        }

        $books = $books->get();

        return view('site.user.profile', compact('user', 'books'));
    }

    public
    function edit()
    {
        $user = auth()->user();
        return view('site.user.edit', compact('user'));
    }

    public
    function update()
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
        return redirect(route('site.user.profile', ['user' => $user]));
    }

    public
    function updatePassword()
    {
        $user = auth()->user();
        request()->validate([
            'oldPassword' => 'required|password|string|min:8',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user->update([
            'password' => bcrypt(request()->password),
        ]);
        return redirect(route('site.user.profile', ['user' => $user]));
    }
}
