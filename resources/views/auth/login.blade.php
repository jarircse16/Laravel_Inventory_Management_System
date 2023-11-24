@extends('layouts.app')

@section('content')

<center><div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header" style="font-weight: bold;">{{ __('Admin Panel') }}</div><br>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary" style="transition: background-color 0.3s ease;">

                                  {{ __('Login') }}

                                  <style>
                                      .btn-primary:hover {
                                          background-color: rgba(0, 0, 0, 0.1); /*  color and transparency */
                                          border-color: #fff; /*border color  */
                                          color: #fff; /*  text color */
                                      }
                                  </style>

                              </button>

                                <br><br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div></center>
<!--<footer style="margin-top: auto;" class="fixed-bottom">
  <center>
    <p>&copy; {{ date('Y') }} Inventory Management System. All rights reserved. Created Using Laravel 10.31.0. Created By <a href="https://github.com/jarircse16" target="_blank">Jarir Ahmed</a>.</p>
</center>-->

    <!-- You can include additional footer content here -->

@endsection
