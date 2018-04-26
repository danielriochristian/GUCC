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

Route::get('/', 'HomeController@index');

Route::get('news/{id}', 'NewsController@index');
Route::get('slider/{id}', 'SliderController@index');

Route::get('profile', 'ProfileController@index');
Route::get('history', 'ProfileController@history');
Route::get('management', 'ProfileController@management');
Route::get('vision', 'ProfileController@vision');

Route::get('professional', 'ProfessionalController@index');

//admin
Route::get('signin', 'BackStageController@setView')->name('signin.setView');
Route::post('attempt', 'BackStageController@submit');

Route::group(['middleware' => ['web']], function() {
  Route::resource('nosuchfile','PostController');
  Route::POST('addPost','PostController@addPost');
  Route::POST('editPost','PostController@editPost');
  Route::POST('deletePost','PostController@deletePost');
});
