@extends('layouts.layout')

@section('style')
  <link rel="stylesheet" type="text/css" href="/css/mypage.css">
@endsection

@section('title')
 | My page : {{Auth::user()->name}}
@endsection

@section('sidebar_content')
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('mazuimeshi.mypage') }}">Profile</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('mazuimeshi.edit') }}">Edit</a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="{{ route('mazuimeshi.newpost') }}">New post <i class="fas fa-grin-stars"></i></a>
        </li>
    </ul>
@endsection

@section('main_content')
	<!-- posted area -->
    <div class="container-fluid">
      <main class="myphoto-area pt-3">
        <!-- photo area -->
        <p class="title-mypage">My Photos</p>
            <form class="form-inline pictures">
              <div class="col-lg-3 picture">
                <img src="imgs/pictures/pizza.png" width="200" height="200" alt="">
              </div>

              <div class="col-lg-3 picture">
                <img src="imgs/pictures/ice.png" width="200" height="200" alt="">
              </div>

              <div class="col-lg-3 picture">
                <img src="imgs/pictures/ice.png" width="200" height="200" alt="">
              </div>

              <div class="col-lg-3 picture">
                <img src="imgs/pictures/mooncafe.jpg" width="200" height="200" alt="">
              </div>

              <div class="col-lg-3 picture">
                <img src="imgs/pictures/dinner.JPG" width="200" height="200" alt="">
              </div>

              <div class="col-lg-3 picture">
                <img src="imgs/pictures/dinner.JPG" width="200" height="200" alt="">
              </div>
          </form>

        <!--dislike area -->
        <p class="title-mypage">Dislikes</p>
            <form class="form-inline pictures">
              <div class="col-lg-3 picture">
                <img src="imgs/pictures/fish.jpg" width="200" height="200" alt="">
              </div>

              <div class="col-lg-3 picture">
                <img src="imgs/pictures/cake.JPG" width="200" height="200" alt="">
              </div>

              <div class="col-lg-3 picture">
                <img src="imgs/pictures/cake.JPG" width="200" height="200" alt="">
              </div>

              <div class="col-lg-3 picture">
                <img src="imgs/pictures/apa.jpg" width="200" height="200" alt="">
              </div>

              <div class="col-lg-3 picture">
                <img src="imgs/pictures/panini.JPG" width="200" height="200" alt="">
              </div>

              <div class="col-lg-3 picture">
                <img src="imgs/pictures/panini.JPG" width="200" height="200" alt="">
              </div>
            </form>
        </main>
    </div>
@endsection
