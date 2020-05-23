<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AdminAuthorsController extends Controller
{
    public function index()
    {
        $authors = Author::orderBy('name')->get();
        return view ('admin.authors.index', compact('authors'));
    }


    public function store(Request $request)
    {
        $author = new Author(request()->validate([
            'name' => 'required',
        ]));
        $author->save();
        return redirect(route('admin.authors.index'));
    }


    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('admin.authors.edit', compact('author'));
    }


    public function update(Request $request, $id)
    {
        $author = Author::findOrFail($id);
        $author->update(request()->validate([
            'name' => 'required',
        ]));
        return redirect(route('admin.authors.index'));
    }




}
