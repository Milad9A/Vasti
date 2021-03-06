<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Support\Facades\App;

class CartController extends Controller
{
    public function index()
    {
        return view('site.cart.index');
    }

    public function login()
    {
        $total = request()->total;
        $books = request()->books;
        return view('site.cart.login', compact('books', 'total'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->cart()->books->firstWhere('id', request()->book_id)->delete();
        if ($user->cart()->books->count() === 1) {

        }
        return redirect()->back();
    }

    public function downloadPDF()
    {
        $books = collect(\GuzzleHttp\json_decode(request()->books));
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('site.cart.invoice', ['books' => $books]);
        return $pdf->stream();
    }

}
