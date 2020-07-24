@extends('layouts.site')

@section('content')

    <div class="news-feed-main">
        <div class="container-news-feed">
            <div class="news-feed-col-1">
                <a href="{{ route('site.user.profile', auth()->user()) }}">
                    <div class="container-user">
                        <img src="{{ asset(auth()->user()->image) }}" alt="">
                        <div class="username" style="color: black">{{ auth()->user()->name }}</div>
                    </div>
                </a>
                <div class="discovered-friends-btn" id="discovered-friends-btn">
                    <i class="fa fa-users"></i><span>Discover friends</span>
                </div>

                <div class="discovered-friends-btn" id="discovered-friends-btn">
                    <i class="fa fa-users"></i><span>My Friends</span>
                </div>

            </div>
            <div class="news-feed-col-2">
                <div class="container-body-news-feed" id="container-body-news-feed">

                    @foreach($loggedActivities->whereIn('causer_id', auth()->user()->followsUsers->except(auth()->user()->id)->pluck('id')) as $log)

                        @if ($log->log_name === 'Added Book to List')

                            <div class="post-card">
                                <p>{{ $log->description }}</p>
                                <p>{{ $log->created_at->diffForHumans() }}</p>
                                <br>
                                <hr>
                                <br>
                                <div class="header-card-post">
                                    <div class="container-avatar">
                                        <a href="{{ route('site.user.profile', ['user' => App\User::findOrFail($log->causer_id)]) }}">
                                            <img src="{{ asset(App\User::findOrFail($log->causer_id)->image)  }}">
                                        </a>

                                        <div class="username-date">
                                            <div
                                                class="username">{{ App\User::findOrFail($log->causer_id)->name }}</div>
                                        </div>
                                    </div>
                                    @livewire('follow-user', ['user' => App\User::findOrFail($log->causer_id)])
                                </div>
                                <div class="body-card-post">
                                    <br>
                                    <div class="container-book-post">
                                        <div class="post-col-1">
                                            <a href="{{ route('site.show', ['book' => App\Book::findOrFail($log->subject_id)]) }}">
                                                <img src="{{ asset(App\Book::findOrFail($log->subject_id)->image) }}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="post-col-2">
                                            <div class="title">
                                                Title: {{ App\Book::findOrFail($log->subject_id)->title }}</div>
                                            <div class="author-name">
                                                Author: {{ App\Book::findOrFail($log->subject_id)->author->name }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @elseif($log->log_name === 'Started Following Category')

                            <div class="post-card">
                                <p>{{ $log->description }}</p>
                                <p>{{ $log->created_at->diffForHumans() }}</p>
                                <br>
                                <hr>
                                <br>
                                <div class="header-card-post">
                                    <div class="container-avatar">
                                        <a href="{{ route('site.user.profile', ['user' => App\User::findOrFail($log->causer_id)]) }}">
                                            <img src="{{ asset(App\User::findOrFail($log->causer_id)->image)  }}">
                                        </a>

                                        <div class="username-date">
                                            <div
                                                class="username">{{ App\User::findOrFail($log->causer_id)->name }}</div>
                                        </div>
                                    </div>
                                    @livewire('follow-user', ['user' => App\User::findOrFail($log->causer_id)])
                                </div>
                                <div class="body-card-post">
                                    <br>
                                    <div class="container-book-post">
                                        <div class="post-col-1">
                                            <a href="{{ route('site.category.show', ['category' => App\Category::findOrFail($log->subject_id)]) }}">
                                                <img
                                                    src="{{ asset(App\Category::findOrFail($log->subject_id)->image) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="post-col-2">
                                            <div class="title">
                                                Category
                                                Name: {{ App\Category::findOrFail($log->subject_id)->name }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @elseif($log->log_name === 'Review' || $log->log_name === 'Like')

                            <div class="post-card">
                                <p>{{ $log->description }}</p>
                                <p>{{ $log->created_at->diffForHumans() }}</p>
                                <br>
                                <hr>
                                <br>
                                <div class="header-card-post">
                                    <div class="container-avatar">
                                        <a href="{{ route('site.user.profile', ['user' => App\User::findOrFail($log->causer_id)]) }}">
                                            <img src="{{ asset(App\User::findOrFail($log->causer_id)->image)  }}">
                                        </a>

                                        <div class="username-date">
                                            <div
                                                class="username">{{ App\User::findOrFail($log->causer_id)->name }}</div>
                                        </div>
                                    </div>
                                    @livewire('follow-user', ['user' => App\User::findOrFail($log->causer_id)])
                                </div>
                                <div class="body-card-post">
                                    <br>
                                    <div class="container-book-post">
                                        <div class="post-col-1">
                                            <a href="{{ route('site.show', ['book' => App\Review::findOrFail($log->subject_id)->book]) }}">
                                                <img
                                                    src="{{ asset(App\Review::findOrFail($log->subject_id)->book->image) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="post-col-2">
                                            <div class="title">
                                                The Review's Body: {{ App\Review::findOrFail($log->subject_id)->body }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @elseif ($log->log_name === 'Book')

                            <div class="post-card">
                                <p>{{ $log->description }}</p>
                                <p>{{ $log->created_at->diffForHumans() }}</p>
                                <br>
                                <hr>
                                <br>
                                <div class="body-card-post">
                                    <br>
                                    <div class="container-book-post">
                                        <div class="post-col-1">
                                            <a href="{{ route('site.show', ['book' => App\Book::findOrFail($log->subject_id)]) }}">
                                                <img src="{{ asset(App\Book::findOrFail($log->subject_id)->image) }}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="post-col-2">
                                            <div class="title">
                                                Title: {{ App\Book::findOrFail($log->subject_id)->title }}</div>
                                            <div class="author-name">
                                                Author: {{ App\Book::findOrFail($log->subject_id)->author->name }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif

                    @endforeach

                </div>
                <div class="discovered-all-friends" id="discovered-all-friends">
                    <div class="container-discovered-friends">
                        <div class="search-friends">
                            <input type="text" name="search-friends" id="search-friends" placeholder="search..">
                            <button class="search-friends-btn">Search</button>
                        </div>
                        <div class="content-search-friends">
                            <div class="container-all-contents">

                                @foreach(App\User::all()->except(auth()->user()->id) as $user)

                                    <div class="container-user">
                                        <div class="container-avatar">
                                            <img src="{{ asset($user->image) }}" alt="">
                                            <p class="username">{{ $user->name }}</p>
                                        </div>
                                        @livewire('follow-user', ['user' => $user])
                                    </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-feed-col-3">
                <div class="container-news">
                    <div class="container-friends-side">
                        <div class="friends">My Authors</div>
                        <div class="container-all-friends">

                            @if (auth()->user()->followsAuthors()->count() > 0)
                                @foreach(auth()->user()->followsAuthors()->get() as $author)

                                    <div class="container-friend-card">
                                        <div class="container-avatar">
                                            <img src="{{ asset('img/twain.jpg') }}" alt="">
                                            <p class="username">{{ $author->name }}</p>
                                        </div>
                                        @livewire('follow-author-no-count', ['author' => $author])
                                    </div>

                                @endforeach
                            @else
                                <p>You're Not Following Any Authors</p>
                            @endif

                        </div>
                    </div>
                    <div class="container-Categories-side">
                        <div class="categories">My Categories</div>
                        <div class="container-all-categories">

                            @if (auth()->user()->followsCategories()->count() > 0)
                                @foreach(auth()->user()->followsCategories()->get() as $category)

                                    <div class="container-friend-card">
                                        <div class="container-avatar">
                                            <img src="{{ asset($category->image) }}" alt="">
                                            <p class="username">{{ $category->name }}</p>
                                        </div>
                                        @livewire('follow-category-no-count', ['category' => $category])
                                    </div>

                                @endforeach
                            @else
                                <p>You're Not Following Any Categories</p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('scripts')
    <script src="/js/discover.js"></script>
@endsection

@endsection
