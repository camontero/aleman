$(document).ready(function (){

	$("#agregar").click(function (event){

		    $.ajax({

		      	url: "src/actions/ingresar_datos.php",
		      	type: "POST",
		      	data: $("#palabra, #significado").serialize(),
		      	success: function (){
		      		console.log ("ingreso");
		      	}

		    });
	});

//--------------------------------------------------------------------------------------//

    $("#jugar").click(function (){ 

    	$.ajax({

		    url: "src/actions/jugar.php",
		    type: "POST",
		    success: function (data){
		    	mostrar_palabra();
		    }
		});
    });
});



//                  ======== FUNCIONES PARA INVOCAR ==========                          //


function mostrar_palabra(){	

	$.post("src/actions/jugar.php", function (data){
		$(".print").html(data);
		$("#play").click(function(){
			
			$("#demo")[0].play(); 
		});

	});
}

$cont1 = 1;
$cont2 = 1;

function comparar (id, significado, palabra){
	$respuesta = $("#word").val();
	console.log (palabra);
	
	
	if ( $respuesta == palabra){
		
        $(".correctas").html("Correctas: " + $cont1);
        $cont1++;
		console.log ("correcto");
		$(".verde").html("¡Correcto!");
		$(".verde").fadeIn( 800 ).delay(500).fadeOut( 800 );
		mostrar_palabra();
	}
	else {
		$(".equivocadas").html("Errores: " + $cont2);
        $cont2++;
		console.log ("error");
		$("#word").val('');
		$(".rojo").html("¡Error!");
		$(".rojo").fadeIn( 800 ).delay(500).fadeOut( 800 );
	}
}