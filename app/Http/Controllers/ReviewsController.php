<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    public function store(Request $request){
        $review = new Review(request()->validate([
            'body' => 'required',
        ]));

        $review['user_id'] = Auth::user()->id;
        $review['book_id'] = $request['book_id'];

        $review->save();

        return redirect()->back();
    }
}
