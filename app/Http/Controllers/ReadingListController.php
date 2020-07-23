<?php

namespace App\Http\Controllers;

use App\User;

class ReadingListController extends Controller
{
    public function index()
    {
        $books = User::where('id', auth()->user()->id)->firstOrFail()->books()->get();
        $user = auth()->user();
        return view('site.reading_list.index', compact('books', 'user'));
    }
}
