<?php

namespace App\Http\Controllers;

use App\Events\TestEvent;

class PushController extends Controller {

	public function test() {

		event(new TestEvent('Hola Mundo!'));

		return view('welcome');
	}
}
