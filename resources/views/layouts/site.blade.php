<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
        integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ="
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/css/search.css">
    <title>Vasti</title>
</head>

<body>

<nav id="main-nav">
    <div class="container">
        <a href="index.html"><h1 class="logo">VASTI</h1></a>
        <div class="nav-text">
            <ul>
                <li><a href="Books.html">Books</a></li>
                <li><a href="Advance_search.html">Advance Search</a></li>
                <li><a href="reading_list.html">Reading list</a></li>
            </ul>
        </div>
        <div class="icon-register">
            <ul>
                <div class="search-box">
                    <input type="text" class="search-text" placeholder="">
                    @svg('icons/icons8-search', 'search-btn')
                </div>
                @svg('icons/shopping-cart', 'cart-btn')

                <!-- Authentication Links -->
                @guest
                    <li class="register-login" id="login">Login</li>
                    @if (Route::has('register'))
                        <li class="register-login" id="register">Register</li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

        </div>
    </div>
</nav>


@yield('content')


<footer class="footer-container">
    <div class="container">
        <div class="col-1">
            <a href="index.html" class="logo">VASTI</a>
            <div class="nav">
                <h1>Navigation</h1>
                <ul>
                    <li><a href="Books.html">Books</a></li>
                    <li><a href="Advance_search.html">Advance Search</a></li>
                    <li><a href="reading_list.html">Reading list</a></li>
                </ul>
            </div>
        </div>
        <div class="col-2">
            <h1>Contact Us</h1>
            <p>Please fill out the form below to contact us</p>
            <form action="" id="message">
                <input type="text" name="name" placeholder="Name" id="name-message"><br>
                <input type="email" name="email" placeholder="Email" id="email-message"><br>
                <textarea name="message" placeholder="Message" id="text-message"></textarea><br>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
    <div class="Copyright">
        <p>Copyright © 2020 VASTI.</p>
    </div>
</footer>

<!-- Modal for register -->

<div class="modal-container" id="modal-register">
    <div class="modal">
        <button class="close-btn" id="close-register">
            <i class="fa fa-times"></i>
        </button>
        <div class="modal-header">
            <h3>{{ __('Register') }}</h3>
        </div>
        <div class="modal-content">
            <form class="modal-form" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-control">
                    <label for="name">{{ __('Name') }}</label>
                    <input
                        type="text"
                        id="name"
                        placeholder="Enter Name"
                        class="form-input @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}"
                        required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input
                        type="email"
                        id="email"
                        placeholder="Enter Email"
                        class="form-input @error('email') is-invalid @enderror"
                        name="email"
                        value="{{ old('email') }}"
                        required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="password">{{ __('Password') }}</label>
                    <input
                        type="password"
                        id="password"
                        placeholder="Enter Password"
                        class="form-input @error('password') is-invalid @enderror"
                        name="password"
                        required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input
                        type="password"
                        id="password-confirm"
                        placeholder="Confirm Password"
                        class="form-input" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn submit-btn">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- modal for login -->

<div class="modal-container" id="modal-login">
    <div class="modal">
        <button class="close-btn" id="close-login">
            <i class="fa fa-times"></i>
        </button>
        <div class="modal-header">
            <h3>{{ __('Login') }}</h3>
        </div>
        <div class="modal-content">
            <form class="modal-form" method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email"
                           type="email"
                           class="form-input @error('email') is-invalid @enderror"
                           name="email"
                           placeholder="Enter Password"
                           value="{{ old('email') }}"
                           required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div>
                    <label for="password">{{ __('Password') }}</label>
                    <input
                        type="password"
                        id="password"
                        class="form-input @error('password') is-invalid @enderror"
                        name="password"
                        placeholder="Enter Password"
                        required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember"
                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn submit-btn">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            Forgot Your Password?
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<script src="/js/main_index.js"></script>
</body>
</html>

