<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('main-search')) {
            $books = Book::where('title', 'like', '%' . request('main-search') . '%')->simplePaginate(15);
        }
        if (request('language')) {
            $books = Book::where('language', request('language'))->simplePaginate(15);
        }
        if(request('rating')){
            $books = Book::where('rating', '>=', request('rating'))->simplePaginate(15);
            return view('site.books.index', ['books' => $books]);
        }


        $books = Book::latest()->simplePaginate(15);
        return view('site.books.index', ['books' => $books]);
    }

    public function home()
    {
        $books = Book::all();

        $featured = Book::latest()->take(4)->get();

        $best_sellers = Book::orderBy('rating', 'desc')->take(6)->get();

        $most_popular = Book::take(6)->get();

        return view('site.books.home', compact('best_sellers', 'most_popular', 'featured'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
