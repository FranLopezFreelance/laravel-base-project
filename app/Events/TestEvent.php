<?php

namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;

class TestEvent extends Event {
	use SerializesModels;

	public $text;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct($text) {
		$this->text = $text;
	}

	/**
	 * Get the channels the event should be broadcast on.
	 *
	 * @return array
	 */
	public function broadcastOn() {
		return ['test-channel'];
	}

    get('/broadcast', function(){
        event(new TestEvent('Broadcasting in Laravel using Pusher!'));

        return view('welcome');
    });
}
