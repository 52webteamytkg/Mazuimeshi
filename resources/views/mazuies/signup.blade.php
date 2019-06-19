@extends('common')

@section('style')

	<!-- link rel="stylesheet" href="css/login.css"> -->
	<link rel="stylesheet" type="text/css" href="/css/signup.css">
@endsection

@section('title')
  Signup
@endsection

@section('main_content')
	<div class="container">
	    <div class="row">
	      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
	        <div class="card card-signin my-2">
	          <div class="card-body">
	          	{{-- Back to Home ボタン --}}
	          	<a class="navbar-brand" href="{{ url('/') }}"><img class="homelogo" src="/imgs/Mazui_homelogo.png" alt="homelogo">
	          	</a>
	            <h4 class="card-title text-center">Sign up!</h4>
	            <form class="form-signin">
	              <div class="form-label-group">
	                <input type="id" id="inputId" class="form-control" placeholder="ID" required autofocus>
	                <label for="inputId">ID</label>
	              </div>

	              <div class="form-label-group">
	                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
	                <label for="inputEmail">Email</label>
	              </div>

	              <div class="form-label-group">
	                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
	                <label for="inputPassword">Password</label>
	              </div>

	              <div class="form-label-group">
	                <input type="checkpw" id="inputCheckpw" class="form-control" placeholder="Checkpw" required>
	                <label for="inputCheckpw">Check pw</label>
	              </div>

	              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign Up</button>
	              <hr class="my-4">

								<div class="sns-coment text-center">
									<p>Or Sign Up Using</p>
								</div>

	              <div class="btn-sns text-center">
		              	<li class="btn-facebook">
			              	<a href=""><i class="fab fa-facebook-square fa-5x"></i></a>
			             	</li>
		              	<li class="btn-twitter">
			              	<a href=""><i class="fab fa-twitter-square fa-5x"></i></a>
			             	</li>
			             	<li class="btn-google">
			              	<a href=""><i class="fab fa-google-plus-square fa-5x"></i></a>
			             	</li>
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
