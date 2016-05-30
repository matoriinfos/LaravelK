<?php

/*
sve rute mozemo proveriti sa php artisan routes:list

*/


Route::group(['middleware'=>['web']],function() {
	Route::get('kontakt', 'StraniceKontroler@getKontakt');
	Route::get('onama','StraniceKontroler@getOnama');
	Route::get('/', 'StraniceKontroler@getIndex');
	Route::resource('posts','PostController');
		});