@extends('layouts.site')

@section('content')

    <div class="shopping-cart-main-confirm">
        <div class="shopping-cart-container">
            <div class="col-2">

                @component('site.cart.invoice', ['books' => $books])
                @endcomponent

                <div class="checkout-cart">
                    <div class="total-price">
                        <p class="total-text">Download the Bill as a pdf</p>
                    </div>

                    <form action="{{ route('site.cart.pdf') }}" method="POST">
                        @csrf
                        <input type="hidden" name="books" value="{{ json_encode($books->toArray()) }}">
                        <button class="checkout-btn" type="submit">
                            Download
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection
