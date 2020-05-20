<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class AdminBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('category')) {
            $books = Category::where('name', request('category'))->firstOrFail()->books()->simplePaginate(5);
        } elseif (request('user')) {
            $books = User::where('id', request('user'))->firstOrFail()->books()->simplePaginate(5);
            $user = User::where('id', request('user'))->firstOrFail();
            return view('admin.books.reading_list', compact('books', 'user'));
        } else {
            $books = Book::simplePaginate(5);
        }

        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book(request()->validate([
            'title' => 'required',
            'author' => 'required',
            'summary' => 'required',
            'isbn' => 'required|unique:books',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'rating' => 'required|numeric|min:0|max:5',
            'categories' => 'required|exists:categories,id'
        ]));
        if ($image = $request->file('image')) {
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $filepath = $request->file('image')->storeAs('covers', $imageName, 'public');
            $book['image'] = $filepath;
        }
        $book->save();
        $book->categories()->attach(request('categories'));

        return redirect(route('admin.books.index', ['page' => round((Book::all()->count() + 2) / 5)]));
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrfail($id);
        $categories = Category::all();
        return view('admin.books.edit', compact('book', 'categories'));
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
        $book = Book::findOrFail($id);
        $book->update(request()->validate([
            'title' => 'required',
            'author' => 'required',
            'summary' => 'required',
            'isbn' => "required|unique:books,isbn,{$id}",
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'rating' => 'required|numeric|min:0|max:5',
            'categories' => 'exists:categories,id'
        ]));
        if ($image = $request->file('image')) {
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $filepath = $request->file('image')->storeAs('covers', $imageName, 'public');
            $book['image'] = $filepath;
            $book->update([
                'image' => $filepath,
            ]);
        }
        return redirect(route('admin.books.index'));
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
