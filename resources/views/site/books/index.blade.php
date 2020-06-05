@extends('layouts.site')

@section('content')


<!-- <i class="fa fa-close"></i> -->
<section class="search-section">
    <div class="container-section">
        <form action="/books" method="GET" id="search-form">
            @csrf

            <div class="search-bar">
                <input type="text" id="main-search" name="main-search" placeholder="Search" class="search"
                    value="{{ old('main-search') }}" />
                <button type="submit">Search</button>
            </div>

            <div class="filter">
                <div class="dropdown">
                    <select name="language" id="language">
                        <option value="none" selected disabled hidden>Language</option>
                        @foreach(App\Book::all()->unique('language') as $book)
                        <option value="{{ $book->language }}">{{ $book->language }}</option>
                        @endforeach
                    </select>
                    <i class="fa fa-caret-down"></i>
                </div>
                <div class="dropdown">
                    <select name="rating" id="rating">
                        <option value="none" selected disabled hidden>Rating</option>
                        <option value="0">0+</option>
                        <option value="1">1+</option>
                        <option value="2">2+</option>
                        <option value="3">3+</option>
                        <option value="4">4+</option>
                        <option value="5">5</option>
                    </select>
                    <i class="fa fa-caret-down"></i>
                </div>
                <div class="dropdown">
                    <select name="order-by" id="order-by">
                        <option value="none" selected disabled hidden>Order By</option>
                        <option value="title_a">Title ascending</option>
                        <option value="title_d">Title descending</option>
                        <option value="author_id_a">Author ascending</option>
                        <option value="author_id_d">Author descending</option>
                        <option value="price_a">Price ascending</option>
                        <option value="price_d">Price descending</option>
                    </select>
                    <i class="fa fa-caret-down"></i>
                </div>
            </div>
        </form>
    </div>
</section>
<main id="main-container">
    <div class="container-category-slid">
        <div class="container-category-slid-row-1">
            <h1 id="primary">categories</h1>
            <form action="/books" method="GET" id="search-form">
                @foreach ($categories as $category)
                <div>
                    <label class="container">
                        {{ $category->name }}
                        <input type="checkbox" name="categories[]" value="{{ $category->id }}">
                        <span class="checkmark"></span>
                    </label>
                </div>
                @endforeach
                <h1>Price range</h1>
                <div class="col-1">
                    <input type="number" value="10" min="10" max="100">
                    <input type="number" value="12" min="10" max="100">
                </div>
                <input type="submit" value="Apply">
            </form>
        </div>
    </div>
    <div class="all-books-container">

        @foreach($books as $book)

        @component('components.book', ['book' => $book])
        @endcomponent

        {{-- <div class="book">
            <a href="">
                <img src="{{ asset($book->image) }}" alt="" height="240px" width="150px">
            </a>
            <h1 class="title">{{ $book->title }}</h1>
            <h1 class="author">by {{ $book->author->name }}</h1>
            <h1 class="price">$12.2</h1>
            <div class="rating">
                @for($i = 0; $i < $book->rating; $i++)
                    <span class="fa fa-star checked"></span>
                @endfor
                @for ($j = 0; $j < 5 - $book->rating; $j++)
                    <span class="fa fa-star"></span>
                @endfor
            </div>
            <input type="submit" value="Buy" class="buy">
            @livewire('add-book', ['book' => $book, 'user' => Illuminate\Support\Facades\Auth::user()])

        </div> --}}
        @endforeach
    </div>
</main>

<section class="Pagination">
    <div class="Pagination-container">
        <form action="">
            <input type="submit" value="&laquo">
            <input type="submit" value="1">
            <input type="submit" value="2">
            <input type="submit" value="3">
            <input type="submit" value="4">
            <input type="submit" value="5">
            <input type="submit" value="&raquo">
            {{-- {{ $books->links() }} --}}
        </form>
    </div>
</section>

@endsection
