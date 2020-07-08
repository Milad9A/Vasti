<?php

namespace App\Http\Livewire;

use App\Book;
use App\Cart;
use Livewire\Component;

class AddToCart extends Component
{
    public $book;
    public $value;

    public function mount(Book $book)
    {
        $this->book = $book;
        $this->value = auth()->user()->cart()->books->contains($this->book) ? "Added to Cart ✓" : "Add to Cart";
    }

    public function addBookToCart()
    {
        if (is_null(auth()->user()->cart())) {
            $cart = Cart::create(['user_id' => auth()->user()->id, 'total' => 0, 'checked_out' => 0]);
            auth()->user()->carts()->save($cart);
            auth()->user()->saveBookToCart($this->book);
        } else {
            auth()->user()->saveBookToCart($this->book);
        }
    }

    public function render()
    {
        $this->value = auth()->user()->cart()->books->contains($this->book) ? "Added to Cart ✓" : "Add to Cart";
        return view('livewire.add-to-cart', [
            'book' => $this->book,
        ]);
    }
}
