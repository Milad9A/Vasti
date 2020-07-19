@extends('layouts.site')

@section('content')

    <div class="shopping-cart-main-confirm">
        <div class="shopping-cart-container">
            <div class="col-2">

                <div class="checkout-cart">
                    <div class="total-price">
                        <p class="total-text">Confirm the Purchase</p>
                    </div>

                    @if($errors->any())
                        {!! implode('', $errors->all('<div style="color: darkred">:message</div>')) !!}
                    @endif

                    <div class="choose-your-payment">
                        <p class="payment">Your total is: {{ $total }}$</p>
                    </div>

                    <form method="POST" action="{{ route('site.cart.banker.purchase') }}">
                        @csrf
                        <input type="hidden" name="total" value="{{ $total }}">
                        <input type="hidden" name="token" value="{{ $token }}">


                        @livewire('confirm-button')
{{--                        @if (auth()->user()->cart())--}}
{{--                            <button class="checkout-btn" type="submit">Confirm</button>--}}
{{--                        @else--}}
{{--                            <button class="checkout-btn">Confirmed!</button>--}}
{{--                        @endif--}}


                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
