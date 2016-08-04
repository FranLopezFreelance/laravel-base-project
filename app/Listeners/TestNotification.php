<?php

namespace App\Listeners;

use App\Events\TestEvent;

class TestNotification {
	/**
	 * Create the event listener.
	 *
	 * @return void
	 */
	public function __construct() {
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  TestEvent  $event
	 * @return void
	 */
	public function handle(TestEvent $event) {
		$pusher = app('pusher');
	}
}
