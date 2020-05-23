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
    @livewireStyles
    @yield('styles')
    <title>Vasti</title>
</head>


<body>

<nav id="main-nav">
    <div class="container">
        <a href="/"><h1 class="logo">VASTI</h1></a>
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
                    <div id="input-search">
                        @livewire('books-search-bar')
                        <i class="fa fa-close" id="close-icon"></i>
                    </div>

                    @svg('icons/icons8-search', 'search-btn', ['id' => 'se'])
                </div>

                <li> @svg('icons/shopping-cart', 'cart-btn')</li>

                <!-- Authentication Links -->
                @guest
                    <li class="register-login" id="login">
                        <a href="{{ route('site.login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="register-login" id="register">
                            <a href="{{ route('site.register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <div class="img-avatar" id="avatar">
                            <img src="{{ asset(Auth::user()->image) }}" alt="" width="30" height="30">
                        </div>
                    </li>
                    <li>
                        <a href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </li>
                    <li>
                        <div aria-labelledby="navbarDropdown">
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


@livewire('search-books')

@yield('content')


<footer class="footer-container">
    <div class="container">
        <div class="footer-col-1">
            <a href="index.html" class="logo">VASTI</a>
            <div class="nav">
                <h1>Navigation</h1>
                <ul>
                    <li><a href="Browse_all_books.html">Browse All Books</a></li>
                    <li><a href="News_feed.html">News feed</a></li>
                    <li><a href="reading_list.html">Reading list</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-col-2">
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

<script src="/js/main_index.js"></script>
<script src="/js/main.js"></script>
@yield('scripts')
@livewireScripts
</body>
</html>

