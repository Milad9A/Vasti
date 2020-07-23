@extends('layouts.site')

@section('content')

    <main class="main-section">
        <div class="main-container">
            <div class="side-col-1">

                @component('components.book-show-page', ['book' => $book])
                @endcomponent

            </div>
            <div class="side-col-2">
                <div class="summary-container">
                    <h1 class="title">{{ $book->title }}
                    </h1>
                    <div class="row-info">
                        <p class="author-name">{{ $book->author->name }}</p>
                        <p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            4/5 (3,024 Ratings)
                        </p>
                    </div>
                    <br>

                    <p class="summary" id="summary"> {{ $book->summary }}
                    <p class="read-more" id="red-more-summary">Read more</p>
                    <div class="categories">
                        @foreach ($book->categories as $category)
                            <a href="{{ route('site.category.show', compact('category')) }}" class="category">{{ $category->name }}</a>
                        @endforeach
                    </div>

                    <div class="add-rating">
                        <div class="rating-container">
                            <p>What did you think?</p>
                            <div class="rating" id="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p id=text-rating></p>
                    </div>
                    <div class="reviews" id="all-reviews">
                        <p class="reviews-text">REVIEWS</p>
                        <div class="container-all-review">

                            @foreach ($book->reviews as $review)
                                <div class="review-container">
                                    <div class="review-user">
                                        <img src="{{ asset($review->user->image) }}" alt="" width="50" height="50">
                                    </div>
                                    <div class="review">
                                        <div class="container">
                                            <div class="user-info">
                                                <div class="col">
                                                    <p class="username">{{ $review->user->name }}</p>
                                                    <p class="followers">{{ $review->user->followedBy()->count() }}
                                                        followers</p>
                                                </div>

                                                <div class="dropdown">
                                                    <button class="dropbtn" type="submit">
                                                        <img
                                                            src="{{url('/img/settings.png')}}"
                                                            width="19"
                                                        >
                                                    </button>
                                                    <div class="dropdown-content">
                                                        <div class="edit">Edit</div>
                                                        <div class="delete">Delete</div>
                                                    </div>
                                                </div>

                                            </div>
                                            <p class="review-content" id="review-content">
                                                {{ $review->body }}
                                            </p>
                                            <p class="read-more" id="read-more-review">Read more</p>
                                        </div>
                                        <div class="interaction-container">
                                            <div class="add-interaction" id="add-interaction">

                                                <form action="/books/reviews/{{ $review->id }}/like" method="POST">
                                                    @csrf
                                                    <button type="submit">
                                                        <img
                                                            src="{{ $review->isLikedBy(auth()->user()) ? url('/img/like/active-like.png') : url('/img/like/unactive-like.png') }}"
                                                            alt="" width="30"
                                                            height="auto"
                                                            id="like"
                                                            class="offline">
                                                    </button>
                                                </form>

                                                <span>{{ $review->likes()->count() }}</span>

                                                <form action="/books/reviews/{{ $review->id }}/like" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">
                                                        <img
                                                            src="{{ $review->isDislikedBy(auth()->user()) ? url('/img/like/active-dislike.png') : url('/img/like/unactive-dislike.png') }}"
                                                            alt="" width="30"
                                                            height="auto"
                                                            id="dislike"
                                                            class="offline">
                                                    </button>
                                                </form>

                                                <span>{{ $review->dislikes()->count() }}</span>
                                            </div>
                                            <div class="interaction">
                                                <span
                                                    class="date-time">{{ $review->created_at->diffForhumans() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="add-review">
                        <form method="POST" action="{{ route('site.reviews.store', compact('book')) }}">
                            @csrf

                            <div class="user-container">
                                <img
                                    src="{{ Auth::user() ? asset(Auth::user()->image) : 'https://emblemsbf.com/img/77148.webp' }}"
                                    alt=""
                                    width="50" height="50">

                                <textarea name="body" placeholder="Write Review"></textarea>
                            </div>
                            <input type="hidden" name="book_id" value="{{ $book->id }}">

                            @error('review-body')
                            <p style="color: crimson; text-align: center">{{ $message }}</p>
                            @enderror

                            <input type="submit" id="add-review-btn" value="Add review">

                        </form>
                    </div>
                </div>
                <div class="clear"></div>
                <section class="recommended-books-containers">
                    <p id="recommended-text">Recommended Books</p>
                    <div class="recommended-books">

                        @foreach($recommendedBooks as $rbook)

                            @component('components.book', ['book' => $rbook])
                            @endcomponent


                        @endforeach

                    </div>
                </section>
            </div>

            <div class="side-col-3">
                <div class="author-container">
                    <div class="author-info">

                        @livewire('follow-author', ['author'=>$book->author, 'book' => $book])

                    </div>
                    <div class="author-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis,
                        porro
                        laudantium voluptatibus perspiciatis natus voluptas sunt. Commodi est dignissimos necessitatibus
                        ipsam quasi nostrum vel maiores!
                    </div>
                </div>


                @if ($book->author->books->count() === 0)
                    <div class="more-from-author">
                        <p class="more-books">More From {{ $book->author->name }}</p>
                        <ul class="books-author">
                            @foreach($book->author->books->except($book->id)->take(7) as $abook)
                                <li><a href="">
                                        <img src="{{ asset($abook->image) }}" alt="" width="50" height="80">
                                        <div class="book-info">
                                            <p class="book-name">{{ $abook->title }}</p>
                                            <p class="category">{{ $abook->categories->pluck('name')->first() }}</p>
                                            <p class="year">{{ substr($abook->published_at, 0, 4) }}</p>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </main>

@endsection
