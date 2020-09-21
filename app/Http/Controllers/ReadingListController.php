<?php

namespace App\Http\Controllers;

use App\Status;
use App\User;
use Illuminate\Http\Request;

class ReadingListController extends Controller
{
    public function index(Request $request)
    {
        $books = User::where('id', auth()->user()->id)->firstOrFail()->books();
        $user = auth()->user();

        if ($request->has('status')) {
            // TODO Add "just Added" to the reading_list page
            $status_id = Status::where('name', request('status'))->firstOrFail()->id;
            $sid = $user->status->pluck('pivot')->where('status_id', $status_id)->pluck('book_id');
            $books->whereIn('books.id', $sid);
        }

        $books = $books->get();
        return view('site.reading_list.index', compact('books', 'user'));
    }
}
