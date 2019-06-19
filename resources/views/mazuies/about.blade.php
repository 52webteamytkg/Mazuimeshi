@extends('head')

@section('style')
{{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/about.css">
@endsection

@section('title')
 | About Our Website
@endsection

@section('body')
    <div class="page-wrapper">
        <div class="bg">
            <div class="container text-center mt-1">
                <div>
                   <img src="imgs/aaron-blanco-tejedor-768029-unsplash.jpg" style="height: 350px;">
                </div>
                <div class="title text-center">
                    <div>
                        <p class="site-name">MazuiMeshi.com</p>
                    </div>
                </div>
                <div class="title text-center">
                    <div>
                        <p class="subname">-Vent your dirt!-</p>
                    </div>
               </div>
               <div class="title text-center">
                    <div class="textarea">
                        <p class="text-en"><span style="border-bottom: 1px solid #808080;">About Our Website</span><br>Have you been stressed lately? Our website is for blowing off stream.<br>We focus on dark side inside people. Generally, people don’t speak ill of something (...do they?), and try not to do it even if they want. Thus, our website is for the people who want to have fun by making fun of something.<br>Let's vent your dirt! Then, be refreshed & be fresh!</p>
                        <p class="text-en">※We do not take responsibility or liability for any trouble that may occur by your posting. Please use this website at your own risk.</p>
                    </div>
                    <div class="textarea">
                        <p class="text-ja">最近ストレスかかえていませんか？当サイトはストレス発散サイトです。<br>人の内側にある邪悪な面に焦点を当ててみました。普通、人は何かに対してぼろかすに言うなんてことはしないものです。(...よね？)<br>たとえ言いたくても言わないようにするものです。ということで、当サイトは何かしらいじって楽しみたい人向けのサイトです。<br>溜まった鬱憤を吐き出しましょう！そしてリフレッシュして元気になりましょう！</p>
                        <p class="text-ja">※投稿による問題が発生した場合、当方では一切責任を負いません。自己責任でお願い申し上げます。<span class="backhome"><a href="{{ route('mazuimeshi.index') }}">Back to Home</a></span></p>
                    </div>
            </div>
         </div>
     </div>
@endsection
