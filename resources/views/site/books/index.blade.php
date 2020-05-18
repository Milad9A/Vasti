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

{{--                    <img src="{!! file_get_contents('/icons/icons8-search.svg') !!}" alt="" height="23" width="23" class="search-btn">--}}
                </div>
                <li><a href=""><img src="/icons/shopping-cart.svg" alt="" height="23" width="23"></a></li>
                <li class="register-login" id="login">Login</li>
                <li class="register-login" id="register">Register</li>
            </ul>
        </div>
    </div>
</nav>

<header id="showcase-header">
    <div class="showcase-container">
        <div class="showcase-text">
            <span class="square"></span>
            <h1 class="text-head">
                Get The Right Books <br> And Get Them Now.
            </h1>
            <button type="submit" class="btn" id="start-read">Start Reading</button>
        </div>
    </div>
</header>

<section id="best-books">
    <div class="igm-best-container" id="book-summary">
        <div class="square"></div>
        <img class="mySlides" src="/img/cover-book-001.png" alt="" height="420px" width="auto">
        <img class="mySlides" src="/img/cover-book-002.png" alt="" height="420px" width="auto">
        <img class="mySlides" src="/img/cover-book-003.png" alt="" height="420px" width="auto">
        <img class="mySlides" src="/img/cover-book-004.png" alt="" height="420px" width="auto">
    </div>
    <div class="text-section">
        <div class="container-text">

            @foreach($featured as $book)
                <p class="text-summary">
                    {{ $book->summary }}
                </p>

                <p class="author-summary">
                    ―{{ $book->author }}
                </p>
            @endforeach

            {{--            <p class="text-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem magnam corporis--}}
            {{--                obcaecati culpa ad nobis laboriosam amet. Nulla explicabo velit, molestiae corporis eius accusantium--}}
            {{--                fugiat cumque ab provident quod, dignissimos rerum facilis esse! Eos eveniet voluptate reiciendis unde--}}
            {{--                doloremque culpa? </p>--}}
            {{--            <br>--}}


            {{--            <p class="author-summary">― Milad .H</p>--}}

            {{--            <p class="text-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem magnam corporis--}}
            {{--                obcaecati culpa ad nobis laboriosam amet. Nulla explicabo velit, molestiae corporis eius accusantium--}}
            {{--                fugiat cumque ab provident quod, dignissimos rerum facilis esse! Eos eveniet voluptate reiciendis unde--}}
            {{--                doloremque culpa? </p>--}}
            {{--            <br>--}}


            {{--            <p class="author-summary">― Milad .H</p>--}}

            {{--            <p class="text-summary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, incidunt impedit--}}
            {{--                provident dignissimos voluptates alias? Laudantium asperiores obcaecati, voluptate quas autem possimus,--}}
            {{--                minima ipsam natus corporis fuga inventore eum sint. </p>--}}
            {{--            <br>--}}

            {{--            <p class="author-summary">― Milad .H</p>--}}
        </div>
        <div class="lines-arrow-bnt">
            <a href="selected_book.html">
                <button type="submit" class="btn" id="start-read-book">Start Reading</button>
            </a>
            <div class="lines">
                <span class="line current"></span>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </div>
    <img src="/icons/next-01-fff.svg" alt="" width="45px" height="90" id="best-arrow">
</section>

<section class="bestselling-books">
    <h1 class="primary-text">Bestselling Books</h1>
    <div class="bestselling-row">
        <a href="selected_book.html" class="next"><img src="/icons/next-02.svg" alt="" width="45px" height="90"></a>

        @foreach($best_sellers as $book)

            <div class="book">
                <a href=""><img src="/img/cover/Book-Cover-Dare-to-Love-a-Duke-by-Eva-Leigh.jpg" alt="" height="240px"
                                width="150px"></a>
                <h1 class="title">{{ $book->title }}</h1>
                <h1 class="author">By {{ $book->author }}</h1>
                <div class="rating">
                    @for($star = 0; $star < $book->rating; $star++)
                        <span class="fa fa-star checked"></span>
                    @endfor
                    @for ($nostar = 0; $nostar < 5 - $book->rating; $nostar++)
                        <span class="fa fa-star"></span>
                    @endfor
                </div>
            </div>

        @endforeach



        {{--        <div class="book">--}}
        {{--            <a href="selected_book.html"><img src="/img/cover/bookcover0001243.jpg" alt=""--}}
        {{--                                              height="240px" width="150px"></a>--}}
        {{--            <h1 class="title">MILLION TO ONE</h1>--}}
        {{--            <h1 class="author">by milad</h1>--}}
        {{--            <div class="rating">--}}
        {{--                <span class="fa fa-star checked"></span>--}}
        {{--                <span class="fa fa-star checked"></span>--}}
        {{--                <span class="fa fa-star checked"></span>--}}
        {{--                <span class="fa fa-star"></span>--}}
        {{--                <span class="fa fa-star"></span>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="book">--}}
        {{--            <a href="selected_book.html"><img src="/img/cover/deathly-hallows-uk-childrens-edition.jpg" alt=""--}}
        {{--                                              height="240px" width="150px"></a>--}}
        {{--            <h1 class="title">MILLION TO ONE</h1>--}}
        {{--            <h1 class="author">by milad</h1>--}}
        {{--            <div class="rating">--}}
        {{--                <span class="fa fa-star checked"></span>--}}
        {{--                <span class="fa fa-star checked"></span>--}}
        {{--                <span class="fa fa-star checked"></span>--}}
        {{--                <span class="fa fa-star"></span>--}}
        {{--                <span class="fa fa-star"></span>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="book">--}}
        {{--            <a href=""><img src="/img/cover/design-for-writers-book-cover-tf-2-a-million-to-one.jpg" alt=""--}}
        {{--                            height="240px" width="150px"></a>--}}
        {{--            <h1 class="title">MILLION TO ONE</h1>--}}
        {{--            <h1 class="author">by milad</h1>--}}
        {{--            <div class="rating">--}}
        {{--                <span class="fa fa-star checked"></span>--}}
        {{--                <span class="fa fa-star checked"></span>--}}
        {{--                <span class="fa fa-star checked"></span>--}}
        {{--                <span class="fa fa-star"></span>--}}
        {{--                <span class="fa fa-star"></span>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="book">--}}
        {{--            <a href=""><img src="/img/cover/pid_26885.jpg" alt="" height="240px" width="150px"></a>--}}
        {{--            <h1 class="title">MILLION TO ONE</h1>--}}
        {{--            <h1 class="author">by milad</h1>--}}
        {{--            <div class="rating">--}}
        {{--                <span class="fa fa-star checked"></span>--}}
        {{--                <span class="fa fa-star checked"></span>--}}
        {{--                <span class="fa fa-star checked"></span>--}}
        {{--                <span class="fa fa-star"></span>--}}
        {{--                <span class="fa fa-star"></span>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="book">--}}
        {{--            <a href=""><img src="/img/cover/e50c016f-b6a8-4666-8fb8-fe6bd5fd9fec_rw_1920.jpeg" alt="" height="240px"--}}
        {{--                            width="150px"></a>--}}
        {{--            <h1 class="title">MILLION TO ONE</h1>--}}
        {{--            <h1 class="author">by milad</h1>--}}
        {{--            <div class="rating">--}}
        {{--                <span class="fa fa-star checked"></span>--}}
        {{--                <span class="fa fa-star checked"></span>--}}
        {{--                <span class="fa fa-star checked"></span>--}}
        {{--                <span class="fa fa-star"></span>--}}
        {{--                <span class="fa fa-star"></span>--}}
        {{--            </div>--}}
        {{--        </div>--}}


        <img src="/icons/next-01.svg" alt="" width="45px" height="90" id="next-book">
    </div>
</section>

<section class="popular-books">
    <h1 class="primary-text">Most Popular Books</h1>
    <div class="popular-row">
        <a href="" class="next"><img src="/icons/next-02.svg" alt="" width="45px" height="90"></a>
        <div class="book">
            <a href=""><img src="/img/cover/Book-Cover-Dare-to-Love-a-Duke-by-Eva-Leigh.jpg" alt="" height="240px"
                            width="150px"></a>
            <h1 class="title">MILLION TO ONE</h1>
            <h1 class="author">by milad</h1>
            <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
        <div class="book">
            <a href=""><img src="/img/cover/bookcover0001243.jpg" alt=""
                            height="240px" width="150px"></a>
            <h1 class="title">MILLION TO ONE</h1>
            <h1 class="author">by milad</h1>
            <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
        <div class="book">
            <a href=""><img src="/img/cover/deathly-hallows-uk-childrens-edition.jpg" alt="" height="240px"
                            width="150px"></a>
            <h1 class="title">MILLION TO ONE</h1>
            <h1 class="author">by milad</h1>
            <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
        <div class="book">
            <a href=""><img src="/img/cover/design-for-writers-book-cover-tf-2-a-million-to-one.jpg" alt=""
                            height="240px" width="150px"></a>
            <h1 class="title">MILLION TO ONE</h1>
            <h1 class="author">by milad</h1>
            <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
        <div class="book">
            <a href=""><img src="/img/cover/pid_26885.jpg" alt="" height="240px" width="150px"></a>
            <h1 class="title">MILLION TO ONE</h1>
            <h1 class="author">by milad</h1>
            <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
        <div class="book">
            <a href=""><img src="/img/cover/e50c016f-b6a8-4666-8fb8-fe6bd5fd9fec_rw_1920.jpeg" alt="" height="240px"
                            width="150px"></a>
            <h1 class="title">MILLION TO ONE</h1>
            <h1 class="author">by milad</h1>
            <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star "></span>
            </div>
        </div>
        <a href="" class="next"><img src="/icons/next-01.svg" alt="" width="45px" height="90"></a>
    </div>
</section>

<section class="categories">
    <h1 class="primary-text">Browse by Category</h1>
    <div class="container-categories">
        <a href="" class="category">
            <img src="/img/Categories/Cooking.jpg" alt="">
            <h1>Cooking</h1>
        </a>

        <a href="" class="category">
            <img src="/img/Categories/Children.jpg" alt="">
            <h1>Children</h1>
        </a>

        <a href="" class="category">
            <img src="/img/Categories/Health.jpg" alt="">
            <h1>Health</h1>
        </a>

        <a href="" class="category">
            <img src="/img/Categories/Religion.jpg" alt="">
            <h1>Religion</h1>
        </a>

        <a href="" class="category">
            <img src="/img/Categories/Biographies.jpg" alt="">
            <h1>Biographies</h1>
        </a>

        <a href="" class="category">
            <img src="/img/Categories/History.jpg" alt="">
            <h1>History</h1>
        </a>

        <a href="" class="category">
            <img src="/img/Categories/Technology.jpg" alt="">
            <h1>Technology</h1>
        </a>

        <a href="" class="category">
            <img src="/img/Categories/Economics.jpg" alt="">
            <h1>Economics</h1>
        </a>

        <a href="" class="category">
            <img src="/img/Categories/Medicine.jpg" alt="">
            <h1>Medicine</h1>
        </a>

        <a href="" class="category">
            <img src="/img/Categories/Fantasy.jpg" alt="">
            <h1>Fantasy</h1>
        </a>

        <a href="" class="category">
            <img src="/img/Categories/Music.jpg" alt="">
            <h1>Music</h1>
        </a>

        <a href="" class="category">
            <img src="/img/Categories/Art.jpg" alt="">
            <h1>Art</h1>
        </a>

    </div>
</section>

<!-- <section class="progress">
<div class="bg">
    <div class="users">
    <img src="/icons/men.svg" alt="">
    <p>500+
    <br> users</p>
    </div>
    <div class="line"></div>
    <div class="books">
    <img src="/icons/books-icon.svg" alt="">
    <p>500+
        <br>Books
    </p>
    </div>
    <div class="line"></div>
    <div class="authors">
    <img src="/icons/author-sign.svg" alt="">
    <p>500+
        <br>Authors
    </p>
</div>
</div>
</section> -->

<section class="read-without-limits" id="read">
    <div class="container">
        <div class="container-col">
            <h1 class="primary-text">READ <br>
                WITHOUT <br>
                LIMITS</h1>
            <button type="submit" class="btn" id="read-register">Register</button>
        </div>
    </div>
</section>

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
            <h3>Register</h3>
        </div>
        <div class="modal-content">
            <p>Register with us to get offers, support and more</p>
            <form class="modal-form" id="register-form">
                <div class="form-control">
                    <label for="name-register">Name</label>
                    <input
                        type="text"
                        id="name-register"
                        placeholder="Enter Name"
                        class="form-input"
                    />
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="email-register">Email</label>
                    <input
                        type="email"
                        id="email-register"
                        placeholder="Enter Email"
                        class="form-input"
                    />
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="password-register">Password</label>
                    <input
                        type="password"
                        id="password-register"
                        placeholder="Enter Password"
                        class="form-input"
                    />
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="password2-register">Confirm Password</label>
                    <input
                        type="password"
                        id="password2-register"
                        placeholder="Confirm Password"
                        class="form-input"
                    />
                    <small>Error message</small>
                </div>
                <input type="submit" value="Submit" class="submit-btn"/>
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
            <h3>Login</h3>
        </div>
        <div class="modal-content">
            <p>Login with us to get offers, support and more</p>
            <form class="modal-form">
                <div>
                    <label for="email-login">Email</label>
                    <input
                        type="email"
                        id="email-login"
                        placeholder="Enter Email"
                        class="form-input"
                    />
                </div>
                <div>
                    <label for="password-login">Password</label>
                    <input
                        type="password"
                        id="password-login"
                        placeholder="Enter Password"
                        class="form-input"
                    />
                </div>
                <input type="submit" value="Submit" class="submit-btn"/>
            </form>
        </div>
    </div>
</div>
<script src="/js/main_index.js"></script>
</body>
</html>


