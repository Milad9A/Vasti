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
                    <p class="primary-text current-selected" id="reading">Currently reading</p>
                </div>
                <div class="plan-to-read">
                    <p class="primary-text" id="plan">Plan to read</p>
                </div>
                <div class="completed">
                    <p class="primary-text" id="completed">Completed</p>
                </div>
            </div>
            <div class="lists-books">
                <div class="book-info">
                    <img src="/img/cover/1 (1).jpg" alt="" height="80"/>
                    <div class="title">
                        title Lorem ipsum dolor, sit amet consectetur adipisicing.
                    </div>
                    <div class="author">author Lorem ipsum dolor sit.</div>
                    <div class="category">category Lorem ipsum dolor sit amet.</div>
                    <div class="data">23/2/2012</div>
                    <div class="remove"><i class="fa fa-remove"></i></div>
                </div>
                <div class="book-info">
                    <img src="/img/cover/1 (1).jpg" alt="" height="80"/>
                    <div class="title">title</div>
                    <div class="author">author</div>
                    <div class="category">category</div>
                    <div class="data">23/2/2012</div>
                    <div class="remove"><i class="fa fa-remove"></i></div>
                </div>
                <div class="book-info">
                    <img src="/img/cover/1 (1).jpg" alt="" height="80"/>
                    <div class="title">title</div>
                    <div class="author">author</div>
                    <div class="category">category</div>
                    <div class="data">23/2/2012</div>
                    <div class="remove"><i class="fa fa-remove"></i></div>
                </div>
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
