@extends('layouts.app')

@section('style')
    <link rel="stylesheet" type="text/css" href="/css/login.css">
@endsection

@section('title')
  Reset Password
@endsection

@section('content')
    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-2">
              <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                {{-- Back to Home ボタン --}}
                <a class="navbar-brand" href="{{ url('/') }}"><img class="homelogo" src="/imgs/Mazui_homelogo.png" alt="homelogo">
                </a>

                <h4 class="card-title text-center">Reset Password</h4>

                <form method="POST" action="{{ route('password.email') }}" class="form-signin">
                    @csrf

                      <div class="form-label-group">

                        <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" name="email" value="{{ old('email') }}" required autofocus>

                        <label for="inputEmail">{{ __('E-Mail Address') }}</label>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                      </div>
                     <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Send Password Reset Link') }}</button>
                </form>
              </div>
            </div>
          </div>
        </div>
     </div>
@endsection