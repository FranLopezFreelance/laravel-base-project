<?php

namespace App\Providers;

use App\Events\TestEvent;
use App\Listeners\TestNotification;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider {
	/**
	 * The event listener mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		SendPushEvent::class => [
			ListenerPushEvent::class
		],
		TestEvent::class => [
			TestNotification::class
		]
	];

	/**
	 * Register any other events for your application.
	 *
	 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
	 * @return void
	 */
	public function boot(DispatcherContract $events) {
		parent::boot($events);

		//
	}

}
