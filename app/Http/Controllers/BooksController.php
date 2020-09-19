<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    public function downloadPDF()
    {
        $title = request()->title;
        return Storage::disk('public')->download('PDFs/' . $title . '.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $books = Book::latest();

        if ($request->has('main-search')) {
            $books->where('title', 'like', '%' . request('main-search') . '%');
        }
        if ($request->has('language')) {
            $books->where('language', request('language'));
        }
        if ($request->has('rating')) {
            $books->where('rating', '>=', request('rating'));
        }
        if ($request->has('order-by')) {
            switch (request('order-by')) {
                case 'title_a':
                    $books = Book::orderBy('title', 'asc');
                    break;
                case 'title_d':
                    $books = Book::orderBy('title', 'desc');
                    break;
                case 'author_id_a':
                    $books = Book::join('authors', 'books.author_id', '=', 'authors.id')
                        ->orderBy('authors.name', 'asc');
                    break;
                case 'author_id_d':
                    $books = Book::join('authors', 'books.author_id', '=', 'authors.id')
                        ->orderBy('authors.name', 'desc');
                    break;
                case 'price_a':
                    $books = Book::orderBy('price', 'asc');
                    break;
                case 'price_d':
                    $books = Book::orderBy('price', 'desc');
                    break;
            }
        }
        if ($request->has('categories')) {
            $categories_ids = request('categories');
            $cids = DB::table('book_category')->whereIn('category_id', $categories_ids)->pluck('book_id');
            $books->whereIn('id', $cids);
        }

        if ($request->has('price_min') && $request->has('price_max')) {
            $books->whereBetween('price', [request('price_min'), request('price_max')]);
        }

        $books = $books->get();

        return view('site.books.index', [
            'books' => $books,
            'categories' => Category::all(),
        ]);
    }

    public function home()
    {
        $books = Book::all();

        $featured = Book::latest()->take(4)->get();

        $best_sellers = Book::orderBy('rating', 'desc')->take(12)->get();

        $most_popular = Book::take(12)->get();

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        $recommendedBooks = Book::all()->except($book->id)->take(4);
        return view('site.books.show', compact('book', 'recommendedBooks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
