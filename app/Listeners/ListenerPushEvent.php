<?php

namespace App\Listeners;

use App\Events\SendPushEvent;

class ListenerPushEvent {
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
	public function handle(SendPushEvent $event) {
		$pusher = app('pusher');
	}
}
