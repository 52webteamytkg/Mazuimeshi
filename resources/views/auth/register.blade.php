@extends('common')

@section('style')

	<!-- link rel="stylesheet" href="css/login.css"> -->
	<link rel="stylesheet" type="text/css" href="/css/signup.css">
@endsection

@section('title')
  Signup
@endsection

@section('contents')
	<div class="container">
	    <div class="row">
	      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
	        <div class="card card-signin">
	          <div class="card-body">
	          	{{-- title --}}
	            <h4 class="card-title text-center">Sign up!</h4>
							{{-- from area --}}
	            <form method="POST" action="{{ route('register') }}" class="form-signin">
	            	@csrf
								{{-- input name --}}
	              <div class="form-label-group">
	                <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="name" name="name" value="{{ old('name') }}" required autofocus>

	                <label for="name">{{ __('Name') }}</label>

											@if ($errors->has('name'))
		                      <span class="invalid-feedback" role="alert">
		                          <strong>{{ $errors->first('name') }}</strong>
		                      </span>
                      @endif
	              </div>

								{{-- input e-mail --}}
	              <div class="form-label-group">
	                <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="email address" name="email" value="{{ old('email') }}" required autofocus>

	                <label for="inputEmail">{{ __('E-Mail Address') }}</label>

											@if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
	              </div>

								{{-- input password --}}
	              <div class="form-label-group">
	                <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

	                <label for="inputPassword">{{ __('Password') }}</label>

	                		@if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
	              </div>

								{{-- confirm password --}}
	              <div class="form-label-group">
	                <input type="password" id="inputCheckpw" class="form-control" name="password_confirmation" placeholder="checkpw" required>

	                <label for="inputCheckpw">{{ __('Confirm Password') }}</label>
	              </div>


								{{-- submit btn --}}
	              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Register') }}</button>
	              <hr class="my-4">

								<div class="sns-coment text-center">
									<p>Or Sign Up Using</p>
								</div>

	              <div class="btn-sns text-center">
	              	<ul class="sns">
		              	<li class="btn-facebook">
			              	<a href=""><i class="fab fa-facebook-square fa-5x"></i></a>
			             	</li>
		              	<li class="btn-twitter">
			              	<a href=""><i class="fab fa-twitter-square fa-5x"></i></a>
			             	</li>
			             	<li class="btn-google">
			              	<a href=""><i class="fab fa-google-plus-square fa-5x"></i></a>
			             	</li>
			            </ul>
			          </div>

			          <div class="signup text-center">
			          	<a class="signup_text" href="">Sign In</a>
			          </div>
	            </form>
	          </div>
	       	</div>
	     	</div>
	   	</div>
	 </div>
@endsection
