@extends('head')

@section('body')
<div class="wrapper">
    {{-- ****** Navigation Bar ****** --}}
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        {{-- *** SNS Links *** --}}
        <a class="navbar-brand" href="{{ route('mazuimeshi.index') }}">
                <img class="home-logo" src="/imgs/Mazui_homelogo.png" alt="homelogo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @guest
            <div class="guest">
                {{--ログインしていない（ゲスト状態）場合の処理 --}}
                Guest
            </div>
            @else
            {{-- ログインしている場合の処理 --}}
            <div class="mypage">
                <a class="btn-mypage" href="{{ route('mazuimeshi.mypage') }}">{{ __('Mypage') }}</a>
                {{Auth::user()->name}}
            </div>
            @endguest
            {{-- *** SNS Links *** --}}
            <div id="navbarNav" class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <i class="fab fa-facebook fa-lg sns-logo"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-twitter fa-lg sns-logo"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-instagram fa-lg sns-logo"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        {{-- ****** Main Contents ****** --}}
        <div class="container-fluid bg-white mt-2">
            @yield('contents')
        </div>

    </div>
@endsection
