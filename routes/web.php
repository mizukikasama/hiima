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


Route::get('/home', 'HiimaController@index');
/*
//上をコメントアウト、この下足したよ。みづき
Route::get('/home', function () {
    return view('hiima.index', ['posts' => App\Post::all(), 'tags' => App\Tag::all()]);
});
*/



Route::post('/home', function () {
    $post = new App\Post();
    $post->body = request()->body;
    $post->save();
    $post->tags()->attach(request()->tags);
    return redirect('/home');
});


//following機能追加しちょ（あき）
Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('follow', 'UserFollowController@store')->name('user.follow');
        Route::delete('unfollow', 'UserFollowController@destroy')->name('user.unfollow');
        Route::get('followings', 'UsersController@followings')->name('users.followings');
        Route::get('followers', 'UsersController@followers')->name('users.followers');
        
    });
});