<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{


      public function store(Request $request)
    {
        $imgPath = $this->saveImg($request->img_url);

        $post =   new Post();//インスタンス化
        $post->title = $request->title;
        // $post->img_url = $request->img_url->store('public/posts_img');
        $post->img_url = $imgPath;
        $post->caption = $request->caption;
        $post->category_id = 1;
        $post->user_id = Auth::user()->id;

        $post->save();

        //一覧ページに戻る（リダイレクト処理）
        return redirect()->route('mazuimeshi.index');
    }

    private function saveImg($image)
    {
        // デフォルトではstorage/app/images/posts_imgに保存
        // ファイル名は自動で設定
        // php artisan storage:linkでシンボリックリンクを作成

        if (\App::environment('heroku')) {
            $imgPath = Storage::disk('s3')->putFile('images', $image, 'public');
            return Storage::disk('s3')->url($imgPath);
        }

        $imgPath = $image->store('images/posts_img', 'public');

        return '../storage/' . $imgPath;
    }
}
