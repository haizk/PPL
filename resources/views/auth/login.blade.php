<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login-style.css') }}" />
</head>

<body>
    <!-- Regist -->
    <div class="container" id="container">
        <!-- login -->
        <div class="form-container login-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Start Your Journey Now!!</h1>
                <input type="email" id="email" name="email" :value="old('email')" required autofocus
                    autocomplete="username" />
                <input type="password" placeholder="Password" id="password" name="password" required
                    autocomplete="current-password" />
                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox" />
                        <label>Remember me </label>
                    </div>
                    <div class="pass-link">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Reset Pass</a>
                        @endif
                    </div>
                    <div class="pass-link">
                        <a href="{{ route('register') }}">Register</a>
                    </div>
                </div>
                <button>Login</button>
                <div class="daftar-tombol">
                    <a href="#">atau</a>
                    <button id="register-mobile">Daftar</button>
                </div>
            </form>
        </div>

        <!-- overlay -->

        <div class="overlay-container" style="background-image: url('assets/images/frame_2.webp')"></div>
    </div>

    <script src="assets/js/script.js"></script>
</body>

</html>
