@extends('layouts.site')

@section('content')

    <div class="shopping-cart-main">
        <div class="shopping-cart-container">
            <div class="col-2">

                <div class="checkout-cart">
                    <div class="total-price">
                        <p class="total-text">Authorize Your Banker Account</p>
                    </div>
{{--                    <div class="choose-your-payment">--}}
{{--                        <p class="payment">Choose your payment method:</p>--}}
{{--                        <div class="methods">--}}
{{--                            <input type="radio" name="banker" id="banker"/>--}}
{{--                            <label for="banker">Banker</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <form method="POST" action="{{ route('site.cart.banker.apilogin') }}">
                        @csrf

                        <div class="bank-checkout">
                            <label for="email">Banker Email</label>
                            <input type="email" name="email" id="email" required/>
                            <label for="password" style="margin-top: 20px">Banker Password</label>
                            <input
                                type="password"
                                name="password"
                                id="password"
                                required
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
