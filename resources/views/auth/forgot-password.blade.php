@extends('layouts.auth')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-7 mx-auto">
                <div class="reset-passowrd">
                    <div class="card radius-10 w-100 mt-8">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4>Reset password</h4>
                                <p>
                                    {{ __('Forgot your password? No problem. Just let us know
                                                          your email address and we will email you a password reset
                                                          link that will allow you to choose a new one.') }}
                                </p>
                            </div>
                            @session('status')
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ $value }}
                                </div>
                            @endsession

                            <x-validation-errors class="mb-4" />
                            <form class="form-body row g-3" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        :value="old('email')" required autofocus autocomplete="username" />
                                </div>
                                <div class="col-12 col-lg-12">
                                    <div class="d-grid">
                                        <button type="Submit" class="btn btn-primary">
                                            Send
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
