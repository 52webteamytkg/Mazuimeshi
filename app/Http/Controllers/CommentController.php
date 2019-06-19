<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests\CreateComment;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{

   public function create() {

         return view('mazuies.detail');

   }

   public function store($post_id,Request $request)
   {

         $comment = new Comment();//インスタンス化
         $comment->user_id = Auth::user()->id;
         $comment->content = $request->content;
         $comment->post_id = $post_id;
         $comment->save();

         //detailページに戻る（リダイレクト処理）
         return redirect()->route('mazuimeshi.detail',['post_id'=>$post_id]);

   }

}
