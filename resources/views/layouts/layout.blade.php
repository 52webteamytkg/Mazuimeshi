@extends('common')

@section('contents')
{{-- ****** Navigation Side Bar ****** --}}
    <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-white sidebar ">

        @yield('sidebar_content')

        {{-- *** Website Information *** --}}
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('mazuimeshi.policy') }}">Website Policy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('mazuimeshi.about') }}">About Our Website</a>
            </li>
        </ul>
        </nav>
    </div>

{{-- ****** Main Contents Area ****** --}}
    @yield('main_content')

@endsection
