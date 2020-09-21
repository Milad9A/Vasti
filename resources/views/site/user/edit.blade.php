@extends('layouts.site')


@section('content')
    <div class="edit-profile-section" id="edit-profile-section">
        <div class="col-1">
            <div class="edit-profile" id="edit-profile">
                Edit Profile
            </div>
            <div class="change-password" id="change-password">Change password</div>
        </div>
        <div class="col-2">
            <div class="info-profile">
                <img src="{{ asset($user->image) }}" alt="" width="50" height="50"/>
                <div class="name">{{ $user->name }}</div>
            </div>
            <div>
                @if($errors->any())
                    {!! implode('', $errors->all('<div style="color: darkred">:message</div>')) !!}
                @endif
            </div>
            <div class="profile-edit" id="profile-option">
                <form action="{{ route('site.user.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="container">
                        <div class="edit-img">
                            <label for="image">Change Profile Photo</label>
                            <input type="file" class="custom-file-input" name="image"/>
                        </div>
                        <div class="edit-username">
                            <label for="name">Username</label>
                            <input type="text" name="name" id="username" value="{{ $user->name }}"/>
                        </div>
                        <div class="edit-bio">
                            <label for="bio">Bio</label>
                            <textarea name="bio" id="bio">{{ $user->bio }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="save-btn">Save</button>
                </form>
            </div>
            <div class="password-edit" id="password-option">
                <form action="{{ route('site.user.profile.update.password') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="container">
                        <div class="old-password">
                            <label for="oldPassword">Old password</label>
                            <input type="password" name="oldPassword" id="old-password"/>
                        </div>
                        <div class="new-password">
                            <label for="password">New password</label>
                            <input type="password" name="password" id="new-password"/>
                        </div>
                        <div class="confirm-password">
                            <label for="password_confirmation">Confirm password</label>
                            <input type="password" name="password_confirmation" id="confirm-password"/>
                        </div>
                    </div>
                    <button type="submit" class="change-password-btn">Change Password</button>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="/js/edit_profile.js"></script>
@endsection
