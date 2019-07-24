@extends('layouts.layout')

@section('title')
  NewPost page
@endsection

@section('style')
  <link rel="stylesheet" type="text/css" href="/css/newpost.css">
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
	<!-- newpost area -->
    <form class="container" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <main class="post-photo pt-2">
          <p class="title-newpost">New post</p>
              <!-- アップ画像 -->
              <div class="col-lg-3 picture" id="boxImage">
                  <img src="" width="400" height="400" alt="Posting Photo" accept="image/*" id="imgFile" type="file">
              </div>

              <form class="created_post">
              <!-- 画像選択 -->
                  <div class="select-photo">
                      <label for="img_url">Select Photo</label>
                      <input type="file" name="img_url" class="form-control sele-photo" id="img_url" name="img_url" >
                  </div>
                {{-- タイトル --}}
                <p class="title-newpost">Title</p>
                  <div class="form-label-group post-title">
                      <input type="title" id="title" class="form-control" name="title" required autofocus>
                  </div>
                <!-- キャプション -->
                <p class="title-newpost">Comment</p>
                  <div class="form-label-group post-comment">
                      <textarea type="comment" id="comment" class="form-control" name="caption"required autofocus></textarea>
                  </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" style="margin-left: 120px;">New post!</button>
              </form>
        </main>
    </form>

    {{-- ファイル選択の画像表示 --}}
    <script>
      var elm = document.getElementById("img_url");
      elm.onchange = function(evt){
        var selectFiles = evt.target.files;
        if(selectFiles.length != 0) {
          var fr = new FileReader();
          fr.readAsDataURL(selectFiles[0]);
          fr.onload = function(evt) {
            document.getElementById('boxImage').innerHTML = '<img src="' + fr.result + '" alt="" style="min-height:400px;max-height:400px;">'; //readAsDataURLで得た結果を、srcに入れたimg要素を生成して挿入
          }
        }
      }
    </script>
  @endsection
