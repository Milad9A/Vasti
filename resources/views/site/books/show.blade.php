@extends('layouts.site')

@section('content')

<main class="main-section">
    <div class="main-container">
        <div class="side-col-1">

            @component('components.book', ['book' => $book])
            @endcomponent


            {{-- <div class="book">
                    <a href=""><img src="/img/cover/Book-Cover-Dare-to-Love-a-Duke-by-Eva-Leigh.jpg" alt="" height="300px" width="185px"></a>
                    <h1 class="price">$12.2</h1>
                    <div class="form-module">
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
                        <input type="submit" value="Buy" class="buy">
                   </div>
               </div> --}}


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
                        <a href="" class="category">{{ $category->name }}</a>
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
                                                <p class="followers">250 followers</p>
                                            </div>
                                            <div class="dropdown">
                                                <button class="dropbtn"><img src="/icons/setting-01.png" alt=""
                                                        width="19"></button>
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
                                            <img src="/icons/like-g-01.png" alt="" width="30" height="auto" id="like"
                                                class="offline">
                                            <span>1k</span>
                                            <img src="/icons/dislike-g-01.png" alt="" width="30" height="auto"
                                                id="dislike" class="offline">
                                            <span>1k</span>
                                        </div>
                                        <div class="interaction">
                                            <span class="date-time">{{ $review->created_at->diffForhumans() }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="add-review">
                        <form method="POST" action="/reviews">
                            @csrf

                            <div class="user-container">
                                <img src="{{ Auth::user() ? asset(Auth::user()->image) : 'https://emblemsbf.com/img/77148.webp' }}" alt=""
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
                    <div class="book">
                        <a href=""><img src="/img/cover/Book-Cover-Dare-to-Love-a-Duke-by-Eva-Leigh.jpg" alt=""
                                height="240px" width="150px"></a>
                        <h1 class="title">MILLION TO ONE</h1>
                        <h1 class="author">by milad</h1>
                        <h1 class="price">$12.2</h1>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
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
                    <div class="book">
                        <a href=""><img src="/img/cover/Book-Cover-Dare-to-Love-a-Duke-by-Eva-Leigh.jpg" alt=""
                                height="240px" width="150px"></a>
                        <h1 class="title">MILLION TO ONE</h1>
                        <h1 class="author">by milad</h1>
                        <h1 class="price">$12.2</h1>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
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
                    <div class="book">
                        <a href=""><img src="/img/cover/Book-Cover-Dare-to-Love-a-Duke-by-Eva-Leigh.jpg" alt=""
                                height="240px" width="150px"></a>
                        <h1 class="title">MILLION TO ONE</h1>
                        <h1 class="author">by milad</h1>
                        <h1 class="price">$12.2</h1>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
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
                    <div class="book">
                        <a href=""><img src="/img/cover/Book-Cover-Dare-to-Love-a-Duke-by-Eva-Leigh.jpg" alt=""
                                height="240px" width="150px"></a>
                        <h1 class="title">MILLION TO ONE</h1>
                        <h1 class="author">by milad</h1>
                        <h1 class="price">$12.2</h1>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
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
                </div>
            </section>
        </div>

        <div class="side-col-3">
            <div class="author-container">
                <div class="author-info">
                    <div class="avatar-name">
                        <img src="/img/Categories/Children.jpg" alt="" class="avatar" width="60" height="60">
                        <div class="name-followers">
                            <p class="author-name">{{ $book->author->name }}</p>
                            <p class="followers">240 followers</p>
                        </div>
                    </div>
                    <input type="submit" class="follow" id="follow" value="follow">
                </div>
                <div class="author-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, porro
                    laudantium voluptatibus perspiciatis natus voluptas sunt. Commodi est dignissimos necessitatibus
                    ipsam quasi nostrum vel maiores!
                </div>
            </div>
            <div class="more-from-author">
                <p class="more-books">More From {{ $book->author->name }}</p>
                <ul class="books-author">
                    @foreach ($book->author->books->take(7) as $abook)
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
        </div>
    </div>
</main>

@endsection
