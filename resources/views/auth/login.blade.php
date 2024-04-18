@extends('layouts.auth')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
                <div class="card radius-10">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h4>Sign In</h4>
                            <p>Sign In to your account</p>
                        </div>
                        <form class="form-body row g-3" method="POST" action="{{ route('login') }}">
                            @csrf
                            {{-- Add on buat login with gmail --}}
                            {{-- <div class="col-12 col-lg-12">
                                    <div class="d-grid gap-2">
                                        <a href="javascript:;" class="btn border border-2 border-primary"><img
                                                src="assets/images/icons/google.png" width="20"
                                                alt="" /><span class="ms-3 fw-500">Sign in with
                                                Google</span></a>
                                        <a href="javascript:;" class="btn border border-2 border-dark"><img
                                                src="assets/images/icons/apple-black-logo.png" width="20"
                                                alt="" /><span class="ms-3 fw-500">Sign in with Apple</span></a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12">
                                    <div class="position-relative border-bottom my-3">
                                        <div class="position-absolute seperator-2 translate-middle-y">
                                            OR
                                        </div>
                                    </div>
                                </div> --}}
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" :value="old('email')" required autofocus autocomplete="username"
                                    class="form-control" id="email" placeholder="abc@example.com" />
                            </div>
                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" required autocomplete="current-password"
                                    class="form-control" id="password" />
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="remember_me"
                                        name="remember" />
                                    <label class="form-check-label" for="remember">{{ __('Remember me') }}</label>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 text-end">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                                @endif
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        Sign In
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 text-center">
                                <p class="mb-0">
                                    Don't have an account?
                                    <a href="{{ route('register') }}">Sign up</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!--end wrapper-->
@endsection
