@extends('layouts.layout')

@section('style')
  <link rel="stylesheet" type="text/css" href="/css/index.css">
@endsection

@section('title')
 | Home
@endsection

@section('sidebar_content')
    <ul class="nav nav-pills flex-column">
        @guest
            {{-- サインアップ --}}
            <li class="nav-item">
                <a class="nav-link d-inline-block" href="{{ route('register') }}">
                    <button type="button" class="btn btn-outline-primary">{{__('Join us!')}}</button>
                </a>
            </li>
            {{-- ログイン --}}
            <li class="nav-item-inout d-inline">
                <a class="nav-link" href="{{ route('login') }}"><button type="button" class="btn btn-outline-primary">{{__('Login')}}</button></a>
            </li>
        @else
            {{-- ログアウト --}}
            <li class="nav-item-inout">
            {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a> --}}

            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <button type="button" class="btn btn-outline-primary btn-logout">{{ __('Logout') }}</button></a>
            {{--  <a class="nav-link" href=""><button type="button" class="btn btn-outline-primary">Logout</button></a> --}}
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            {{-- 新規投稿 --}}
            <li class="nav-item-inout d-inline">
                <a class="nav-link" href="{{ route('mazuimeshi.newpost')  }}"><button type="button" class="btn btn-outline-primary">New post</button></a>
            </li>


        @endauth
    </ul>
    {{-- 検索 --}}
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
            <form class="form-inline search">
            <input class="form-control mr-sm-2" style="width: 170px;" type="search" placeholder="Search" aria-label="Search">
            <i class="fas fa-search fa-lg"></i>
            </form>
            </li>
        </ul>

        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
            <p class="nav-link" href="">Category</p>
            </li>
            <li class="nav-item">
            <a class="nav-category-link" href="">Ranking</a>
            </li>
            <li class="nav-item">
            <a class="nav-category-link" href="">Area</a>
            </li>
            <li class="nav-item">
            <a class="nav-category-link" href="">Genre</a>
            </li>
            <li class="nav-item">
            <a class="nav-category-link" href="">Vibe</a>
            </li>
        </ul>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
            <p class="nav-link" href="">Filter</p>
            </li>
        </ul>
@endsection

@section('main_content')
    <!-- posted area -->
    <div class="container-fluid">
        <main>
            <div class="form-inline photo-area">
                @foreach($posts as $post)
                     <div class="col-lg-5 picture">
                        @if($post->img_url)
                            <a class="" href="{{ route('mazuimeshi.detail',['post_id'=>$post->id] ) }}">
                                <img src="{{ $post->img_url }}" width="400" height="400" alt="">
                            </a>
                        @endif
                        <ul>
                            <li id="created_at">{{ $post['created_at'] }}</li>
                            {{-- dislike btn 機能 --}}
                            <li>
                                <form class="d-inline" method="POST" action="{{ route('post.dislike', ['post_id' => $post->id])}}" >
                                 @csrf
                                    <input type="hidden" name="page" value="mazuimeshi.index">
                                    <button type="submit" class="btn btn-secondly">
                                        <i class="fas fa-thumbs-down fa-lg"></i>
                                    </button>
                                    {{-- dislike カウント --}}
                                    <span>{{ $post->dislikes->count() }}</span>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endforeach
                </div>
        </main>
    </div>
@endsection
