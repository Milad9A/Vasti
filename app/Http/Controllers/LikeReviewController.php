<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class LikeReviewController extends Controller
{
    public function store($id){
        $review = Review::findOrFail($id);
        $review->like();
        return back();
    }

    public function destroy($id){
        $review = Review::findOrFail($id);
        $review->dislike();
        return back();
    }
}
