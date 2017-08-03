<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//User routes
Route::get('/users/{user}', "UserController@show");
Auth::routes();

//University routes
Route::get('/universities', "FilterController@schools");
Route::get('/universities/{id}' , "UniversityController@show");
Route::get('schools/create', 'AdminController@show');
Route::post('schools/create', 'UniversityController@create');
//Route::get('/universities/create', "CreateController@school");

//Professor routes
Route::get('/professors', 'FilterController@professors');
Route::get('/professors/create', "CreateController@professor");
Route::get('/professors/{id}', "ProfessorController@show");
Route::post('/professors/create', "ProfessorController@create" );
Route::post('/professors/{id}', "CommentController@create");
Route::get('/professors/{id}/delete', 'ProfessorController@remove');
Route::get('/professors/{profId}/delete/{id}', 'CommentController@remove');

//Misc routes
Route::get('/', 'WelcomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/search', 'HomeController@show');
Route::get('/about' , 'NavController@about');
Route::get('/contact', "NavController@contact");
Route::get('/FAQ', 'NavController@FAQ');

Route::post('/professors/{id}', "CommentController@CreatePComment");

Route::post('/universities/{id}', 'CommentController@CreateUComment');

Route::get('schools/create', 'AdminController@show');

Route::post('schools/create', 'UniversityController@create');


