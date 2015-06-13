<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('/{id}', function ($id) {
   		 $users = \DB::table('users')->where('username' ,$id)->get();
		return view('perfil',compact('users'));
});
Route::get('sigo/{id}', function ($id) {
   		 $users = \DB::table('idols')->where('idol_id' ,$id)->get();
		return view('seguidores',compact('users'));
});
Route::get('mesiguen/{id}', function ($id) {
   		 $users = \DB::table('idols')->where('user_id' ,$id)->get();
		return view('mesiguen',compact('users'));
});


Route::resource('articles','ArticlesController');
Route::resource('movies','MoviesController');
Route::resource('reviews','ReviewsController');
Route::resource('likes','LikesController');
Route::resource('ratings','RatingsController');
Route::resource('posts','PostsController');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('idols','IdolsController',
    ['only'=>['store']]);