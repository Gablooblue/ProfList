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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/search', 'HomeController@show');

Route::get('/about' , 'NavController@about');

Route::get('/contact', "NavController@contact");

Route::get('/FAQ', 'NavController@FAQ');

Route::get('/universities', "FilterController@schools");

Route::get('/professors', 'FilterController@professors');

//Route::get('/universities/create', "CreateController@school");

Route::get('/professors/create', "CreateController@professor");

Route::get('/universities/{id}' , "UniversityController@show");

Route::get('/professors/{id}', "ProfessorController@show");

Route::get('/users/{user}', "UserController@show");

Route::post('/professors/create', "ProfessorController@create" );

Route::post('/professors/{id}', "CommentController@create");

Route::get('schools/create', 'AdminController@show');

Route::post('schools/create', 'UniversityController@create');

Route::get('/professors/{id}/delete', 'ProfessorController@remove');

Route::get('/professors/{profId}/delete/{id}', 'CommentController@remove');


