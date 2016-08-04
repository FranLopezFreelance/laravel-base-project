$(function(){

	console.log('Javascript funcionando!');
	
		var pusher = new Pusher('fde4c913418bef9c7a8b');

		var channel = pusher.subscribe('event');

		channel.bind('App\\Events\\TestEvent', function(data){

			console.log(data.message);

		});

});