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

Route::get('/', function () {
    if(\Auth::check()){
        return redirect('/home');
    } else {
        return view('welcome');
    }
});

// user registration追加したよ、かほ
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// Login authentication 追加したよ（かほ）
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


//hiima関連
Route::get('/home', 'HiimaController@index');
/*
//上をコメントアウト、この下足したよ。みづき
Route::get('/home', function () {
    return view('hiima.index', ['posts' => App\Post::all(), 'tags' => App\Tag::all()]);
});
*/

Route::post('/home', 'HiimaController@store')->name('hiima.store');
Route::delete('/home/{id}', 'HiimaController@destroy')->name('hiima.destroy');
// laravelの引数を指定するときの書き方/home/{id}で$idを設定している

//hiima詳細
Route::view('show','hiima.show')->name('hiima.show');
Route::resource('hiima','HiimaController');

/*
Route::post('/home', function () {
    $post = new App\Post();
    $post->body = request()->body;
    $post->save();
    //$post->users()->attach(request()->users); //足したよ。ばなな
    $post->tags()->attach(request()->tags,['user_id' => \Auth::user()->id]);
    return redirect('/home');
});
*/

//はじめての方へ関連
Route::view('hajimete1','hajimete.hajimete1')->name('hajimete.hajimete1');

Route::view('hajimete2','hajimete.hajimete2')->name('hajimete.hajimete2');

Route::view('hajimete3','hajimete.hajimete3')->name('hajimete.hajimete3');

Route::view('hajimete4','hajimete.hajimete4')->name('hajimete.hajimete4');

Route::view('hajimete5','hajimete.hajimete5')->name('hajimete.hajimete5');


//linktorouteでhajimete.indexが表示されるようになる


//following機能追加しちょ（あき）
Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('follow', 'UserFollowController@store')->name('user.follow');
        Route::delete('unfollow', 'UserFollowController@destroy')->name('user.unfollow');
        Route::get('followings', 'UsersController@followings')->name('users.followings');
        Route::get('followers', 'UsersController@followers')->name('users.followers');
        
    });
      //足したよ//aki 
    Route::resource('histories', 'Controller', ['only' => ['store', 'destroy']]);
});

