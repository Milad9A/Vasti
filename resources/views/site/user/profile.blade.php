@extends('layouts.site')

@section('content')
    <div class="profile" id="profile">
        <div class="main-container">
            <div class="head-container">
                <img
                    src="{{ asset($user->image) }}"
                    alt=""
                    height="180"
                    width="180"
                    class="avatar-profile"
                />
                <div class="info-container">
                    <div class="rows">
                        <div class="username">{{ $user->name }}</div>

                        @if(auth()->user()->is($user))

                            <div class="row-1">     
                                    <input
                                        type="submit"
                                        value="My Books"
                                        id="my-books"
                                        class="btn-w"
                                    />                              
                                <a href="{{ route('site.user.profile.edit') }}">
                                    <input
                                        type="submit"
                                        value="Edit Profile"
                                        id="edit-profile-btn"
                                        class="btn"
                                    />
                                </a>
                            </div>

                        @else
                            @livewire('follow-user', ['user' => $user])
                        @endif
                    </div>
                    <div class="rows row-2">
                        <div class="followers">{{ $user->followedBy()->count() }} Followers</div>
                        <div
                            class="following">{{ $user->followsUsers()->count() + $user->followsAuthors()->count() + $user->followsCategories()->count() }}
                            Following
                        </div>
                    </div>
                    <div class="rows row-3">
                        <div class="bio">
                            {{ $user->bio }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="lists-section" id="lists">


                <div class="currently-reading">
                    <a href="{{ route('site.user.profile', ['status' => 'Currently Reading', 'user' => $user]) }}">
                        <p class="primary-text {{ request('status') == 'Currently Reading' ? 'current-selected' : '' }}"
                           id="reading">Currently reading</p>
                    </a>
                </div>

                <div class="plan-to-read">
                    <a href="{{ route('site.user.profile', ['status' => 'Plan to Read', 'user' => $user]) }}">
                        <p class="primary-text {{ request('status') == 'Plan to Read' ? 'current-selected' : '' }}"
                           id="plan">Plan to Read</p>
                    </a>
                </div>
                <div class="completed">
                    <a href="{{ route('site.user.profile', ['status' => 'Completed', 'user' => $user]) }}">
                        <p class="primary-text {{ request('status') == 'Completed' ? 'current-selected' : '' }}"
                           id="completed">Completed</p>
                    </a>
                </div>
            </div>
            <div class="lists-books">
                @foreach($books as $book)
                    <div class="book-info">
                        <a href="{{ route('site.show', ['book' => $book]) }}">
                            <img src="{{ $book->image }}" alt="" height="80"/>
                        </a>
                        <div class="title">{{ $book->title }}</div>
                        <div class="author">{{ $book->author->name }}</div>
                        <div class="category"></div>
                        <div
                            class="data">{{ Illuminate\Support\Carbon::parse($book->published_at)->diffForHumans() }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="modal-container-b" id="modal-b">
      <div class="modal-b">
        <button class="close-btn" id="close-b">
          <i class="fa fa-times"></i>
        </button>
        <div class="modal-header-b">
          <p>Your Books</p>
        </div>
        <div class="modal-content-b">
            <div class="container-item">
                <img src="/img/favicon.png" alt="" height="110px" width="60px">
                <p class="title-book">Title Book</p>
                <button>Download</button>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script src="/js/profile.js"></script>
@endsection
