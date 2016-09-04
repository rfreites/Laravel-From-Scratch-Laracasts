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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function (){
	return view('pages.about');
});

Route::get('/people', function (){
	
	$people = ['Ronny', 'Taylor', 'Frank'];
	
	return view('pages.people', compact('people'));
});

Route::get('/pages', 'PagesController@pages');


//Cards

Route::get('cards','CardsController@index');

Route::get('cards/{card}','CardsController@show');

//Comments Cards

Route::post('cards/{card}/notes', 'NotesController@store');

