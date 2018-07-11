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
*/
// user registration追加したよ、かほ
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// Login authentication 追加したよ（かほ）
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

/*Route::get('/', function () {
    return view('welcome');
});
*/

//上をコメントアウト、この下足したよ。みづき
Route::get('/', function () {
    return view('welcome', ['posts' => App\Post::all(), 'tags' => App\Tag::all()]);
});



Route::post('/', function () {
    $post = new App\Post();
    $post->body = request()->body;
    $post->save();
    $post->tags()->attach(request()->tags);
    return redirect('/');
});
