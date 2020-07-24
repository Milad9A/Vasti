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
            <p id="primary">Categories</p>
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
                <p>Price range</p>
                <div class="col-1">
                    <input name="price_min" type="number" value="10" min="10" max="200">
                    <input name="price_max" type="number" value="80" min="10" max="200">
                </div>
                <input type="submit" value="Apply">
            </form>
        </div>
    </div>
    <div class="all-books-container">

        @foreach($books as $book)

            @component('components.book', ['book' => $book])
            @endcomponent

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
