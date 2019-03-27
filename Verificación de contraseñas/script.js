$(document).ready(function() {

	$('#p2').keyup(function() {

		var pass1 = $('#p1').val();
		var pass2 = $('#p2').val();

		if ( pass1 == pass2 ) {
			$('#error2').css("background", "url(check.png)");
		} else {
			$('#error2').text("No coinciden las contrasñeas").css("color", "red");
		}

	});

