<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
          integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/search.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    @livewireStyles
    @yield('styles')
    <title>Vasti</title>
</head>


<body>

<nav id="main-nav">
    <div class="container">
        <a href="/">
            <h1 class="logo">VASTI</h1>
        </a>
        <div class="nav-text">
            <ul>
                <li><a href="{{  route('site.books.index') }}">Browse All Books</a></li>
                <li><a href="#">Reading list</a></li>
                <li><a href="#">News Feed</a></li>
            </ul>
        </div>
        <div class="icon-register">
            <ul>

                @livewire('books-search-bar')

                <li>
                    @auth()
                        <a href="{{ route('site.cart.index', auth()->user()) }}">
                            @svg('icons/shopping-cart', 'cart-btn')
                        </a>
                    @else
                        <a href="{{ route('site.login') }}">
                            @svg('icons/shopping-cart', 'cart-btn')
                        </a>
                    @endauth
                </li>

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
                @endguest
            </ul>
        </div>
    </div>
</nav>


@Auth

    <div class="user-dropdown-menu" id="user-dropdown-menu">
        <div class="container">
            <ul>
                <li><img src="{{ asset(Auth::user()->image) }}" alt=""></li>
                <li>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </li>
                <li>
                    {{ Auth::user()->email }} <span class="caret"></span>
                </li>
            </ul>
        </div>
        <hr>
        <ul class="setting">
            <li><a href=""><i class='fas fa-user-alt'></i>Edit Profile</a></li>
            <li><a href=""><i class="material-icons">feedback</i>send feedback</a></li>
            <li>
                <div aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>

@endauth

<div class="content-search" id="content">
    @livewire('search-books')
</div>

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
            <form method="POST" action="/emails">
                @csrf
                <div>
                    <input id="name-message" type="text" class="input" placeholder="Name" name="name"
                           value="{{ old('name') }}" required>
                    @error('name')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <br>
                <div>
                    <input id="email-message" type="email" class="input" placeholder="Email" name="email"
                           value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <br>
                <div>
                        <textarea id="text-message" type="text" class="input" placeholder="Message" name="message_body"
                                  value="{{ old('message_body') }}" required></textarea>
                    @error('message_body')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <br>
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
<script src="/js/jquery.min.js"></script>
<script src="/js/owl.carousel.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        dots: false,
        margin: 0,
        end: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            550: {
                items: 2
            },
            700: {
                items: 3
            },
            800: {
                items: 4
            },
            1150: {
                items: 5
            },
            1250: {
                items: 6
            }
        }
    });

    var owl = $('#popular');
    owl.owlCarousel();
    $('#next-popular').click(function () {
        owl.trigger('next.owl.carousel');
    })
    $('#prev-popular').click(function () {
        owl.trigger('prev.owl.carousel');
    });

</script>

@yield('scripts')
@livewireScripts

</body>

</html>
