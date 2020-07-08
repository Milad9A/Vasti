@extends('layouts.site')

@section('content')

    <div class="shopping-cart">
        <div class="shopping-cart-header">
            <p>Books in my cart</p>
        </div>
        <div class="shopping-cart-main">
            <div class="shopping-cart-container">
                <div class="col-1">
                    <div class="book-cart-info">
                        <div class="cover">Cover Book</div>
                        <div class="title">Title</div>
                        <div class="author">Author</div>
                        <div class="price">Price</div>
                    </div>
                    <div class="book-cart">
                        <img src="/img/cover/1 (1).jpg" alt="" height="70" />
                        <div class="title">Avatar The Last Airbender</div>
                        <div class="author">Milad</div>
                        <div class="price">100$</div>
                        <div class="remove"><i class="fa fa-remove"></i></div>
                    </div>
                    <div class="book-cart">
                        <img src="/img/cover/1 (1).jpg" alt="" height="70" />
                        <div class="title">
                            Avatar The Last Airbender Lorem ipsum dolor sit.
                        </div>
                        <div class="author">Milad</div>
                        <div class="price">100$</div>
                        <div class="remove"><i class="fa fa-remove"></i></div>
                    </div>
                    <div class="book-cart">
                        <img src="/img/cover/1 (1).jpg" alt="" height="70" />
                        <div class="title">Avatar The Last Airbender</div>
                        <div class="author">Milad</div>
                        <div class="price">100$</div>
                        <div class="remove"><i class="fa fa-remove"></i></div>
                    </div>
                    <div class="book-cart">
                        <img src="/img/cover/1 (1).jpg" alt="" height="70" />
                        <div class="title">Avatar The Last Airbender</div>
                        <div class="author">Milad</div>
                        <div class="price">100$</div>
                        <div class="remove"><i class="fa fa-remove"></i></div>
                    </div>
                    <div class="book-cart">
                        <img src="/img/cover/1 (1).jpg" alt="" height="70" />
                        <div class="title">Avatar The Last Airbender</div>
                        <div class="author">Milad</div>
                        <div class="price">100$</div>
                        <div class="remove"><i class="fa fa-remove"></i></div>
                    </div>
                    <div class="book-cart">
                        <img src="/img/cover/1 (1).jpg" alt="" height="70" />
                        <div class="title">Avatar The Last Airbender</div>
                        <div class="author">Milad</div>
                        <div class="price">100$</div>
                        <div class="remove"><i class="fa fa-remove"></i></div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="checkout-cart">
                        <div class="total-price">
                            <p class="total-text">TOTAL PRICE</p>
                            <p class="total-value">1000$</p>
                        </div>
                        <div class="choose-your-payment">
                            <p class="payment">choose your payment method:</p>
                            <div class="methods">
                                <input type="radio" name="banker" id="banker" />
                                <label for="banker">Banker</label>
                            </div>
                        </div>
                        <div class="bank-checkout">
                            <label for="account">Enter bank account</label>
                            <input type="text" name="account" id="account" />
                            <label for="password-account"
                            >Enter password for bank account</label
                            >
                            <input
                                type="password"
                                name="password-account"
                                id="password-account"
                            />
                        </div>
                        <button class="checkout-btn">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
