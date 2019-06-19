<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */

/**************************************
 * ログイン前、後 共通の画面
 **************************************/
Route::get('/', 'PageController@index')->name('mazuimeshi.index');               // index.blade.php 表示

Route::get('/detail/{post_id}/', 'PageController@detail')->name('mazuimeshi.detail');       // detail.blade.php 表示

/**************************************
 * ログインに関係ない画面表示
 **************************************/
Route::get('/about', 'PageController@about')->name('mazuimeshi.about');          // about.blade.php 表示
Route::get('/policy', 'PageController@policy')->name('mazuimeshi.policy');       // policy.blade.php 表示

/**************************************
 * ログイン機能
 **************************************/
// ** Authクラスを利用するため削除 **
// Route::get('/mylogin','PageController@login')->name('mazuimeshi.login');        // login.blade.php 表示
// Route::get('/signup','PageController@signup')->name('mazuimeshi.signup');       // signup.blade.php 表示
// Auth::routes(); -> 個別設定に変更
Route::get('members/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('members/login', 'Auth\LoginController@login');
Route::post('members/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('members/signup', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('members/signup', 'Auth\RegisterController@register');

Route::get('members/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('members/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('members/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('members/password/reset', 'Auth\ResetPasswordController@reset');

/**************************************
 * ログイン後
 **************************************/
Route::group(['middleware' => 'auth'], function () {
    Route::get('edit', 'PageController@edit')->name('mazuimeshi.edit');             // edit.blade.php 表示
    Route::get('mypage', 'PageController@mypage')->name('mazuimeshi.mypage');       // mypage.blade.php 表示
    Route::get('newpost', 'PageController@newpost')->name('mazuimeshi.newpost');    // newpost.blade.php 表示
    Route::post('newpost/store', 'PostController@store')->name('post.store');       //新規投稿機能

    Route::post('/dislike/{post_id}/','DislikeController@dislike')->name('post.dislike');   // Dislike機能
    Route::post('comment/store/{post}/', 'CommentController@store')->name('comment.store'); // コメント保存処理


});
