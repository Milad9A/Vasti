<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login_register.css">
    <title>Login</title>
</head>
<body>
<div class="modal-container" id="modal-login">
    <div class="modal-header">
        <h1>Vasti | Login</h1>
    </div>

    <div class="modal">
        <div class="modal-content">
            <form class="modal-form" method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email"
                           type="email"
                           class="form-input @error('email') is-invalid @enderror"
                           name="email"
                           placeholder="Enter Password"
                           value="{{ old('email') }}"
                           required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: crimson">{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div>
                    <label for="password">{{ __('Password') }}</label>
                    <input
                        type="password"
                        id="password"
                        class="form-input @error('password') is-invalid @enderror"
                        name="password"
                        placeholder="Enter Password"
                        required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: crimson">{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row mb-0">
                    <div class="form-check">
                        <label class="form-check-label" for="remember">
                            <input class="form-check-input" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                            {{ __('Remember Me') }}
                        </label>

                    </div>
                </div>

                @if (Route::has('password.request'))
                            <div>
                                <a class="btn btn-link" id="forgot" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        @endif

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <input type="submit" value="Login" class="submit-btn"/>
                    </div>
                </div>


            </form>
        </div>
    </div>
    <footer class="login-footer">
        <div>
            <br>
            <p>Don't have an account? &nbsp;<a href="{{ route('site.register') }}" id="register">Register Here</a></p>

        </div>
    </footer>
</div>
<script src="/js/login_register.js"></script>
</body>
</html>
