<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class TestEvent extends Event implements ShouldBroadcast {

	use SerializesModels;

	public $message;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct($message) {
		$this->message = $message;
	}

	/**
	 * Get the channels the event should be broadcast on.
	 *
	 * @return array
	 */
	public function broadcastOn() {
		return ['event'];
	}

}
