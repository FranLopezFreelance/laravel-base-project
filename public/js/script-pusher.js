$(function(){

	var pusher = new Pusher('fde4c913418bef9c7a8b');

	var channel1 = pusher.subscribe('event');

	channel1.bind('App\\Events\\TestEvent', function(data){

		console.log(data.message);

	});

	if($('#idUserLogedIn')){
		var id = $('#idUserLogedIn').html();

		var channel2 = pusher.subscribe(id);

		channel2.bind('App\\Events\\SendPushEvent', function(data){

			alert(data.msg.text);

		});
	}

});