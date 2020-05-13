<?php

use Illuminate\Support\Facades\Route;

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
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

// Route::post('/tweet/{id}/act', 'LikeController@actOnTweet');
// Route::get('tweet/like/{id}', ['as' => 'tweet.like', 'uses' => 'LikeController@likeTweet']);


// Route::get('/tweets/{id}/act', ['as' => 'comment.like', 'uses' => 'LikeController@likeComment']);

Route::post('/like/{tweet}', 'TasksController@likeTweet');


Route::post('/unlike/{tweet}', 'TasksController@unlikeTweet');


Route::get('profile/{id}', 'ProfilesController@showPost');

// Route::get('tweet/{id}', 'TasksController@showProfile');

Route::resource('tweet', 'TasksController');

Route::resource('profiles', 'ProfilesController');

Route::resource('comments', 'CommentController');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');

Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');


