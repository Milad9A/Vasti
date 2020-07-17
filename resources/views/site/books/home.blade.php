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
            <div class="owl-nav">
                @svg('icons/next-02', ['id' => 'prev-bestselling'])
            </div>

            <div class="owl-carousel owl-theme" id="bestselling">
                @foreach($best_sellers as $sbook)

                    @component('components.book', ['book' => $sbook])
                    @endcomponent

                @endforeach
            </div>
            <div class="owl-nav">
                @svg('icons/next-01', ['id' => 'next-bestselling'])
            </div>
    </section>

    <section class="popular-books">
        <h1 class="primary-text">Most Popular Books</h1>
        <div class="popular-row">
            <div class="owl-nav">
                @svg('icons/next-02-p', ['id' => 'prev-popular'])
            </div>

            <div class="owl-carousel owl-theme" id="popular">
                @foreach($most_popular as $mbook)

                    @component('components.book', ['book' => $mbook])
                    @endcomponent

                @endforeach
            </div>
            <div class="owl-nav">
                @svg('icons/next-01-p', ['id' => 'next-popular'])
            </div>
        </div>
    </section>

    <section class="categories">
        <h1 class="primary-text">Browse by Category</h1>
        <div class="container-categories">

                @foreach(\App\Category::all()->take(12) as $category)
                        <a href="{{ route('site.books.index', ['categories[]' => $category->id]) }}" class="category">
                            <img src="{{ asset($category->image) }}" alt="">
                            <h1>{{ $category->name }}</h1>
                        </a>
                @endforeach
        </div>
    </section>

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
