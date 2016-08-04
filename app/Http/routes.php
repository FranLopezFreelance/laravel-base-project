<?php

use Illuminate\Support\Facades\Auth;

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

Route::get('/',

function () {

		//NOTIFICATION//
		//$pusher = new Pusher('fde4c913418bef9c7a8b', 'f372de6e86369b9aae85', 231061);

		return view('welcome');
	});

Route::get('push', 'PushController@test');

Route::auth();

Route::get('/home', 'HomeController@index');
