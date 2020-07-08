@extends('layouts.site')

@section('content')

    <div class="shopping-cart-main">
        <div class="shopping-cart-container">
            <div class="col-2">

                <div class="checkout-cart">
                    <div class="total-price">
                        <p class="total-text">Authorize Your Account</p>
                    </div>
                    <div class="choose-your-payment">
                        <p class="payment">choose your payment method:</p>
                        <div class="methods">
                            <input type="radio" name="banker" id="banker"/>
                            <label for="banker">Banker</label>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('site.cart.banker.apilogin') }}">
                        @csrf
                        <div class="bank-checkout">
                            <label for="email">Banker Email</label>
                            <input type="text" name="email" id="email"/>
                            <label for="password">Banker Password</label>
                            <input
                                type="password"
                                name="password"
                                id="password"
                            >
                        </div>
                        <input type="hidden" name="total" value="{{ $total }}">
                        <button class="checkout-btn" type="submit">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
