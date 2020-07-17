@extends('layouts.site')

@section('content')

    @if (auth()->user()->cart())

        <div class="shopping-cart">
            <div class="shopping-cart-header">
                <p>Books in my cart</p>
            </div>
            <div class="shopping-cart-main">
                <div class="shopping-cart-container">
                    <div class="col-1">
                        <div class="book-cart-info">
                            <div class="cover">Book Cover</div>
                            <div class="title">Title</div>
                            <div class="author">Author</div>
                            <div class="price">Price</div>
                        </div>


                        @if (auth()->user()->cart()->books->count() !== 0)

                            @foreach(auth()->user()->cart()->books as $book)
                                <div class="book-cart">
                                    <img src="{{ asset($book->image) }}" alt="" height="70"/>
                                    <div class="title">{{ $book->title }}</div>
                                    <div class="author">{{ $book->author->name }}</div>
                                    <div class="price">{{ $book->price }}$</div>
                                    <div class="remove"><i class="fa fa-remove"></i></div>
                                </div>
                            @endforeach

                        @else
                            <div class="book-cart">
                                <p style="font-size: 18px">
                                    You have no books in your cart!
                                </p>
                            </div>
                        @endif
                    </div>

                    <div class="col-2">

                        <div class="checkout-cart">
                            <div class="total-price">
                                <p class="total-text">TOTAL PRICE</p>
                                <p class="total-value">{{ auth()->user()->cart()->books->sum('price') }}$</p>
                            </div>
                            <form action="{{ route('site.cart.banker.login') }}" method="GET">
                                @csrf
                                <button class="checkout-btn" type="submit">Checkout</button>
                                <input type="hidden" name="total"
                                       value="{{ auth()->user()->cart()->books->sum('price') }}">
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    @else
        <div class="shopping-cart">
            <div class="shopping-cart-header">
                <p>Your Cart is Empty!</p>
            </div>
        </div>

    @endif

@endsection
