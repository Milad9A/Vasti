@extends('layouts.site')

@section('content')

    <div class="shopping-cart-main">
        <div class="shopping-cart-container">
            <div class="col-2">

                <div class="checkout-cart">
                    <div class="total-price">
                        <p class="total-text">Confirm the Purchase</p>
                    </div>
                    <div class="choose-your-payment">
                        <p class="payment">Your total is: {{ $total }}$</p>
                    </div>

                    <form method="POST" action="{{ route('site.cart.banker.purchase') }}">
                        @csrf
                        <input type="hidden" name="total" value="{{ $total }}">
                        <input type="hidden" name="token" value="{{ $token }}">
                        <button class="checkout-btn" type="submit">Confirm</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
