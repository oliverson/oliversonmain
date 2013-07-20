$(function()
{
	$.extend($.gritter.options, {
	    time: 1500 // hang on the screen for ...
	});

	setTimeout(function () {
		$.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'This is a regular notice!',
			// (string | mandatory) the text inside the notification
			text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.',
			// (string | optional) the image to display on the left
			image: 'http://a0.twimg.com/profile_images/59268975/jquery_avatar_bigger.png',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: false,
			// (int | optional) the time you want it to be alive for before fading out
			time: ''
		});
		return false;
	}, 800);

	setTimeout(function () {
		$.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'This is a light notification',
            // (string | mandatory) the text inside the notification
            text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
            class_name: 'gritter-light'
        });
	}, 2000);

	var n = notyfy({
		text: '<h4>Alert!</h4> <p>You have <strong>3,450</strong> unread messages. You can click here to close me.</p>',
		type: 'primary',
		layout: 'bottomRight',
		theme: 'boolight',
		closeWith: ['click']
	});
});