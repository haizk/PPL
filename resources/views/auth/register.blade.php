@extends('layouts.auth')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-7 mx-auto mt-5">
            <div class="card radius-10">
                <div class="card-body p-4">
                    <div class="text-center">
                        <h4>Sign Up</h4>
                        <p>Create New Account</p>
                    </div>
                    <form class="form-body row g-3" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="col-12 col-lg-12">
                            <div class="d-grid gap-2">
                                <a href="{{ route('auth.google') }}" class="btn border border-2 border-primary"><img src="assets/images/icons/google.png" width="20" alt="" /><span class="ms-3 fw-500">Sign up with Google</span></a>
                                <!-- <a href="javascript:;" class="btn border border-2 border-dark"><img src="assets/images/icons/apple-black-logo.png" width="20" alt="" /><span class="ms-3 fw-500">Sign up with Apple</span></a> -->
                            </div>
                        </div>
                        <div class="col-12 col-lg-12">
                            <div class="position-relative border-bottom my-3">
                                <div class="position-absolute seperator-2 translate-middle-y">
                                    OR
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input class="form-control" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autocomplete="username" />
                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password" />
                        </div>
                        <div class="col-12">
                            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="col-12 col-lg-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
                                <label class="form-check-label" for="flexCheckChecked">
                                    I agree the Terms and Conditions
                                </label>
                            </div>
                        </div>
                        @endif
                        <div class="col-12 col-lg-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 text-center">
                            <p class="mb-0">
                                Already have an account?
                                <a href="{{ route('login') }}">Sign in</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection