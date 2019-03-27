$(document).ready(function(){

	// keyup -> EVENTO QUE SE DISPARA SIEMPRE QUE SUELTO UNA TECLA 
	//keydown -> evento que se dispara siempre que apreto una tecla
	// cada vez que interactuo con el teclado dentro del input 
		// almaceno en una variable lo escrito por el usuario
		// lo mando al archivo PHP para realizar la busqueda
	$("#p2").blur(function(){
        console.log("algo");
        var password2 = $(this).val();
        var password1 = $("#p1").val();
        console.log(password2 , password1);
		$.ajax({
			async:true,
			type:'post',
			url:'funciones/validacion.php',
			data : {password1:password1 , password2 : password2},
			beforeSend : function(){
				//ruedita cargando
				// $("#resultado").html('<img src="ruedita.gif">');
			},
			success : function(loquesea){
                console.log(loquesea);

				if(loquesea == "si") {
                    $("#p1").css("border","2px solid green");
                    $("#p2").css("border","2px solid green");

				} else {
                    $("#p1").css("border","2px solid red");
                    $("#p2").css("border","2px solid red");

				}
			},
			timeout : 4000,
			error: function(){

			}


		})
	});
	
});
