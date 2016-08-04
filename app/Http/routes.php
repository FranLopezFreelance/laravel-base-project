<?php

use App\User;

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

		$users = User::all();

		return view('welcome', compact('users'));
	});

Route::get('push', 'PushController@test');

Route::get('push/{id}', 'PushController@sendPush');

Route::auth();

Route::get('/home', 'HomeController@index');
