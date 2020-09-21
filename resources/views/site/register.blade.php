<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login_register.css">
    <title>Document</title>
</head>
<body>
<div class="modal-container" id="modal-register">
    <div class="modal-header">
        <img src="{{url('/img/vasti-logo.png')}}" alt="" height="250px" width="auto" id="logo-lr">
    </div>
    <div class="modal">
        <div class="modal-content">
            <form class="modal-form" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-control">
                    <label for="name">{{ __('Name') }}</label>
                    <input
                        type="text"
                        id="name"
                        placeholder="Enter Name"
                        class="form-input @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}"
                        required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <small>&nbsp;</small>
                </div>

                <div class="form-control">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input
                        type="email"
                        id="email"
                        placeholder="Enter Email"
                        class="form-input @error('email') is-invalid @enderror"
                        name="email"
                        value="{{ old('email') }}"
                        required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <small>&nbsp;</small>
                </div>

                <div class="form-control">
                    <label for="password">{{ __('Password') }}</label>
                    <input
                        type="password"
                        id="password"
                        placeholder="Enter Password"
                        class="form-input @error('password') is-invalid @enderror"
                        name="password"
                        required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <small>&nbsp;</small>
                </div>
                <div class="form-control">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input
                        type="password"
                        id="password-confirm"
                        placeholder="Confirm Password"
                        class="form-input" name="password_confirmation" required autocomplete="new-password">
                </div>
                <small>&nbsp;</small>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <input type="submit" value="Register" class="btn submit-btn" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <p>Already have an account? &nbsp;</p><a href="{{ route('site.login') }}"id="login">Login Here</a>
    </footer>
</div>
<script src="/js/login_register.js"></script>
</body>
</html>
