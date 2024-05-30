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
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <h1>Reset Password</h1>
                @session('status')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ $value }}
                    </div>
                @endsession
                <input type="email" id="email" name="email" :value="old('email')" required autofocus
                    autocomplete="username" />

                <button>Submit</button>

            </form>
        </div>

        <!-- overlay -->

        <div class="overlay-container" style="background-image: url('assets/images/frame_2.webp')"></div>
    </div>

    <script src="assets/js/script.js"></script>
</body>

</html>
