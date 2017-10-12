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

Route::get('/', function () {
		return 'All cats';
	});

Route::get('/{id}', function ($id) {
		return "All cats #${id}";
	});

Route::get('/about', function () {
		$corp = 'Iviettech'
		return view('about', ['corp' => $corp]);
	//	return view('about')->with('corp', $corp);
	//	return view('about')->compact('corp');
	});
