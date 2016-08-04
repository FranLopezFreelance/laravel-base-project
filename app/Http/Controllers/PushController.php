<?php

namespace App\Http\Controllers;

use App\Events\SendPushEvent;
use App\Events\TestEvent;

class PushController extends Controller {

	public function test() {

		event(new TestEvent('Hola Mundo!'));

		return view('welcome');
	}

	public function sendPush($id) {
		event(new SendPushEvent(
				[
					'text'    => 'Te han hecho un Push...  =)',
					'user_id' => $id,
				]));
	}
}
