<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function index()
    {
        return view('site.cart.index');
    }

    public function login()
    {
        $total = request()->total;
        return view('site.cart.login', compact('total'));
    }
}
