@extends('layouts.site')

@section('content')

    <header id="showcase-header">
        <div class="showcase-container">
            <div class="showcase-text">
                <span class="square"></span>
                <h1 class="text-head">
                    Get The Right Books <br> And Get Them Now.
                </h1>
                <button type="submit" class="btn" id="start-read"><a href="register_login.html">Start Reading</a>
                </button>
            </div>
        </div>
    </header>

    <section id="best-books">
        <div class="igm-best-container" id="book-summary">
            <div class="square"></div>
            @foreach($featured as $book)
                <img class="mySlides" src="{{ asset($book->image) }}" alt="" height="420px" width="auto">  {{--260px--}}
            @endforeach
        </div>
        <div class="text-section">
            <div class="container-text">

                @foreach($featured as $book)
                    <p class="text-summary">
                        {{ $book->summary }}
                    </p>

                    <p class="author-summary">
                        ―{{ $book->author->name }}
                    </p>
                @endforeach

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
        @svg('icons/featured-btn', 'next-01f-btn', ['id' => 'best-arrow'])
    </section>

    <section class="bestselling-books">
        <h1 class="primary-text">Bestselling Books</h1>
        <div class="bestselling-row">
            @svg('icons/next-02', 'prve-bo')
            @foreach($best_sellers as $sbook)

                <div class="book">
                    <a href="">
                        <img src="{{ asset($sbook->image) }}"
                             alt="" height="240px" width="150px">
                    </a>
                    <h1 class="title">{{ $sbook->title }}</h1>
                    <h1 class="author">By {{ $sbook->author->name }}</h1>
                    <h1 class="price">$12.2</h1>
                    <div class="rating">
                        @for($i = 0; $i < $sbook->rating; $i++)
                            <span class="fa fa-star checked"></span>
                        @endfor
                        @for ($j = 0; $j < 5 - $sbook->rating; $j++)
                            <span class="fa fa-star"></span>
                        @endfor
                    </div>
                    <input type="submit" value="Buy" class="buy">
                    <input type="submit" value="Add to list" class="add-to-list">
                    <span class="fa fa-plus"></span>
                    <div class="dropdown">
                        <select name="" id="status-book">
                            <option value="Want to Read">Want to Read</option>
                            <option value="Reader">Reader</option>
                            <option value="Currently Reading">Currently Reading</option>
                        </select>
                        <i class="fa fa-caret-down"></i>
                    </div>
                </div>
            @endforeach

            @svg('icons/next-01', 'next-bo')
        </div>
    </section>

    <section class="popular-books">
        <h1 class="primary-text">Most Popular Books</h1>
        <div class="popular-row">
            @svg('icons/next-02', 'prve-bo')

            @foreach($most_popular as $mbook)

                <div class="book">
                    <a href=""><img src="{{ asset($mbook->image) }}" alt="" height="240px"
                                    width="150px"></a>
                    <h1 class="title">{{ $mbook->title }}</h1>
                    <h1 class="author">By {{ $mbook->author->name }}</h1>
                    <h1 class="price">$12.2</h1>
                    <div class="rating">
                        @for($i = 0; $i < $mbook->rating; $i++)
                            <span class="fa fa-star checked"></span>
                        @endfor
                        @for ($j = 0; $j < 5 - $mbook->rating; $j++)
                            <span class="fa fa-star"></span>
                        @endfor
                    </div>
                    <input type="submit" value="Buy" class="buy">
                    <input type="submit" value="Add to list" class="add-to-list">
                    <span class="fa fa-plus"></span>
                    <div class="dropdown">
                        <select name="" id="status-book">
                            <option value="Want to Read">Want to Read</option>
                            <option value="Reader">Reader</option>
                            <option value="Currently Reading">Currently Reading</option>
                        </select>
                        <i class="fa fa-caret-down"></i>
                    </div>
                </div>
            @endforeach

            @svg('icons/next-01', 'next-bo')
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

@endsection
