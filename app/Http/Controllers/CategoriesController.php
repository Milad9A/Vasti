<?php

namespace App\Http\Controllers;

use App\Category;

class CategoriesController extends Controller
{
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('site.category.show', compact('category'));
    }
}
