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
Route::get('Event/{id}', 'EventController@show');

Route::get('profile', 'ProfileController@index');
Route::get('history', 'ProfileController@history');
Route::get('management', 'ProfileController@management');
Route::get('vision', 'ProfileController@vision');

Route::get('professional', 'ProfessionalController@index');

//admin
Route::get('signin', 'BackStageController@setView')->name('signin.setView');
Route::post('attempt', 'BackStageController@submit');


Auth::routes();

//Route::resource('manageslider','ManageSliderController');

//Route Slider
Route::get('manageslider','ManageSliderController@index');
// Route::get('manageslier/create','ManageSliderController@create');//store
Route::post('addslider','ManageSliderController@store');//ganti
Route::get('manageslider/{id}/view','ManageSliderController@show');
Route::get('manageslider/{id}/edit','ManageSliderController@edit');
Route::put('manageslider/{id}','ManageSliderController@update');
Route::delete('manageslider/{id}','ManageSliderController@destroy');

// Route::get('tampil','ManageSliderController@tampil');


//Route Article
Route::get('managearticle','ManageArticleController@index');
Route::get('managearticle/create','ManageArticleController@create');
Route::post('addarticle','ManageArticleController@store');
Route::get('managearticle/{id}/edit','ManageArticleController@edit');
Route::get('managearticle/{id}/view','ManageArticleController@view');
Route::put('managearticle/{id}','ManageArticleController@update');
Route::delete('managearticle/{id}','ManageArticleController@destroy');

//Route Event
Route::get('manageevent','ManageEventController@index');
Route::get('manageevent/create','ManageEventController@create');
Route::post('addevent','ManageEventController@store');
Route::get('manageevent/{id}/edit','ManageEventController@edit');
Route::put('manageevent/{id}','ManageEventController@update');
Route::delete('manageevent/{id}','ManageEventController@destroy');
Route::get('manageevent/{id}','ManageEventController@show');

//Route upcoming Event
Route::get('upcoming','upcomingeventController@index');
Route::get('upcoming/create','upcomingeventController@create');
Route::post('addupcomingevent','upcomingeventController@store');
Route::get('upcoming/{id}/edit','upcomingeventController@edit');
Route::put('upcoming/{id}','upcomingeventController@update');
Route::delete('upcoming/{id}','upcomingeventController@destroy');
Route::get('upcoming/{id}','upcomingeventController@show');

//Route Past Event
Route::get('pastevent','pasteventController@index');
// Route::get('pastevent/create','pasteventeventController@create');
// Route::post('addpasteventevent','pasteventeventController@store');
Route::get('pastevent/{id}/edit','pasteventController@edit');
Route::put('pastevent/{id}','pasteventController@update');
Route::delete('pastevent/{id}','pasteventController@destroy');
Route::get('pastevent/{id}','pasteventController@show');

//Route help
// Route::get('/', 'HelpController@getRoot');
Route::get('help','HelpController@getRoot');
Route::get('help/create','HelpController@create');
Route::post('addfaq','HelpController@store');
Route::get('help/{id}/edit','HelpController@edit');
Route::put('help/{id}','HelpController@update');
Route::delete('help/{id}','HelpController@destroy');


//Route help manager
Route::get('help1','HelpController@manager');
Route::get('help1/create','HelpController@createmanager');

//Route admin
Route::group(['middleware' => ['web']], function() {
  Route::resource('nosuchfile','PostController');
  Route::POST('addPost','PostController@addPost');
  Route::POST('editPost','PostController@editPost');
  Route::POST('deletePost','PostController@deletePost');
});
