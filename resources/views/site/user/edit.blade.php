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
                <img src="/img/cover-03-01.png" alt="" width="40" height="40"/>
                <div class="name">Milad A</div>
            </div>
            <div class="profile-edit" id="profile-option">
                <div class="container">
                    <div class="edit-img">
                        <label for="">Change Profile Photo</label>
                        <input type="file" class="custom-file-input"/>
                    </div>
                    <div class="edit-username">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username"/>
                    </div>
                    <div class="edit-bio">
                        <label for="bio">Bio</label>
                        <textarea name="bio" id="bio"></textarea>
                    </div>
                </div>
                <button class="save-btn">Save</button>
            </div>
            <div class="password-edit" id="password-option">
                <div class="container">
                    <div class="old-password">
                        <label for="old-password">Old password</label>
                        <input type="password" name="old-password" id="old-password"/>
                    </div>
                    <div class="new-password">
                        <label for="new-password">New password</label>
                        <input type="password" name="new-password" id="new-password"/>
                    </div>
                    <div class="confirm-password">
                        <label for="confirm-password">Confirm password</label>
                        <input
                            type="password"
                            name="confirm-password"
                            id="confirm-password"
                        />
                    </div>
                </div>
                <button class="change-password-btn">Change Password</button>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="/js/profile.js"></script>
@endsection
