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

        if (auth()->user()) {
            if (auth()->user()->purchased->contains($this->book))
                $this->value = "Purchased";
            else if (auth()->user()->cart()) {
                $this->value = auth()->user()->cart()->books->contains($this->book) ? "Added to Cart  ✓" : "Add to Cart";
            } else {
                $this->value = "Add to Cart";
            }
        } else {
            $this->value = "Add to Cart";
        }

//        if (auth()->user() && auth()->user()->cart()) {
//            $this->value = auth()->user()->cart()->books->contains($this->book) ? "Added to Cart  ✓" : "Add to Cart";
//        } else {
//            $this->value = "Add to Cart";
//        }
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

        if (auth()->user()) {
            if (auth()->user()->purchased->contains($this->book))
                $this->value = "Purchased";
            else if (auth()->user()->cart()) {
                $this->value = auth()->user()->cart()->books->contains($this->book) ? "Added to Cart  ✓" : "Add to Cart";
            }
        } else {
            $this->value = "Add to Cart";
        }


//        if (auth()->user() && auth()->user()->cart()) {
//            $this->value = auth()->user()->cart()->books->contains($this->book) ? "Added to Cart  ✓" : "Add to Cart";
//        } else {
//            $this->value = "Add to Cart";
//        }
        return view('livewire.add-to-cart', [
            'book' => $this->book,
        ]);
    }
}
