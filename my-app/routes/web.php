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

Route::get('/', function () {
    return view('welcome');
});
Route::get('Login','AuthenticationController@Login');
Route::get('SignUp','AuthenticationController@SignUp');
Route::get('Logout','AuthenticationController@Logout');
Route::post('LoginSubmit','AuthenticationController@LoginAuth');
Route::post('SignUpSubmit','AuthenticationController@SignUpAuth');

Route::group(['middleware'=>['Authentication']],function(){
    Route::get('Home', 'HomeController@Index');
    Route::get('getPostData','PostsController@getPostsData');
    Route::get('getNewsData','PostsController@getNewsData');
});

Route::get('showForm','DataModelController@Index');
Route::post('saveData','DataModelController@Store');
Route::get('/test', function () {
    return view('Pages.TestPage');
});