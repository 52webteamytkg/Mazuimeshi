@extends('layout')

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/login.css">
@endsection

@section('title')
  Login
@endsection

@section('content')
	<div class="container">
	    <div class="row">
	      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
	        <div class="card card-signin my-5">
	          <div class="card-body">
	          	<h5 class="card-greeting text-center">Welcome Back!</h5>
	            <h4 class="card-title text-center">Login&nbsp;&nbsp;&nbsp;Sign In</h4>
	            <form class="form-signin">
	              <div class="form-label-group">
	                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
	                <label for="inputEmail">ID/Email</label>
	              </div>

	              <div class="form-label-group">
	                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
	                <label for="inputPassword">Password</label>
	              </div>

	              <div class="custom-control custom-checkbox mb-3">
	                <input type="checkbox" class="custom-control-input" id="customCheck1">
	                <label class="custom-control-label" for="customCheck1">Remember password</label>
	              </div>

	              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign In</button>
	              <hr class="my-4">

								<div class="sns-coment text-center">
									<p>Or Sign Up Using</p>
								</div>

	              <div class="btn-sns">
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
			          	<a class="signup_text" href="">Sign Up</a>
			          </div>
	            </form>
	          </div>
	        </div>
	      </div>
	    </div>
	 </div>
@endsection
