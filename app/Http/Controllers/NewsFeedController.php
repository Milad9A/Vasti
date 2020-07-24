<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class NewsFeedController extends Controller
{
    public function index()
    {
        $loggedActivities = Activity::latest()->get();
        return view('site.news_feed.index', compact('loggedActivities'));
    }
}
