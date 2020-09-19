@extends('layouts.site')

@section('content')

    <div class="reading-list-main">

        <section class="status-bar">
            <div class="status-bar-container" id="status-bar">
                <button class="want-to-read Current" id="want-to-read">Plan to Read</button>
                <button class="reader" id="reader">Completed</button>
                <button class="currently-reading" id="currently-reading">Currently Reading</button>
            </div>
        </section>

        <main class="reading-list">

            @foreach($books as $book)

                <div class="container-status-book">
                    <div class="img-container">
                        <a href="{{ route('site.show', ['book' => $book]) }}">
                            <img src="{{ asset($book->image) }}" alt=""
                                 height="200px" width="130px">
                        </a>
                    </div>
                    <div class="description-container">
                        <p class="title">{{ $book->title }}</p>
                        <p class="author"><span>by </span>{{ $book->author->name }}</p>

                        <div class="rating">
                            @for($i = 0; $i < $book->rating; $i++)
                                <span class="fa fa-star checked"></span>
                            @endfor
                            @for ($j = 0; $j < 5 - $book->rating; $j++)
                                <span class="fa fa-star"></span>
                            @endfor
                        </div>

                        @livewire('add-book', ['book' => $book])

                    </div>
                    <div class="categories-suggestion">
                        @foreach($book->categories as $category)
                            <span class="category">{{ $category->name }}</span>
                        @endforeach
                    </div>
                </div>

            @endforeach

        </main>
    </div>

@endsection

@section('scripts')
    <script src="/js/reading_list.js"></script>
@endsection
