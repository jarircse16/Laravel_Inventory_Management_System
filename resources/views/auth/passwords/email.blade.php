@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-weight: bold; text-align: center;">{{ __('Reset Password') }}</div>
                <br>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
<!-- Email Text Start -->
                        <div class="row mb-3" style="font-weight: bold; text-align: center;"> <!--Center Align Tag here -->
                            <label for="email" class="col-md-4 col-form-label" >{{ __('Email Address') }}</label>
<!-- Email Text End -->
                        <br><br>
<!-- Email Input Box Start -->
                            <div class="col-md-6" style="margin: auto;">
                                <div class="input-group" style="text-align: center;">  <!--Center Align Tag here -->
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
<!-- Email Input Box End -->
                                <br>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


<!-- Password Reset Button Start -->
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4" style="text-align: center;">
                                <button type="submit" class="btn btn-primary" style="font-weight: bold; display: inline-block;">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
<!-- Password Reset Button End -->
                        <br>
<!-- Back to Login Link Start -->
                        <div class="row">
                            <div class="col-md-12" style="text-align: center;">
                              <button type="submit" class="btn btn-primary" style="font-weight: bold; display: inline-block;">
                                <a href="{{ route('login') }}">Back to Login</a>
                                <style>
                                    .btn-primary:hover {
                                        background-color: rgba(0, 0, 0, 0.1); /*  color and transparency */
                                        border-color: #fff; /*border color  */
                                        color: #fff; /*  text color */
                                    }
                                    a{
                                      text-decoration: none;
                                      color: black;
                                    }
                                </style>
                              </button>
                            </div>
                        </div>
<!-- Back to Login Link End -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer style="margin-top: auto;" class="fixed-bottom">
  <center>
    <p>&copy; {{ date('Y') }} Inventory Management System. All rights reserved. Created Using Laravel 10.31.0. Created By <a href="https://github.com/jarircse16" target="_blank">Jarir Ahmed</a>.</p>
</center>
@endsection
