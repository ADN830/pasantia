//buscador en listas de preguntas frecunetes
$(buscar_datos());
function buscar_datos(consulta){
	$.ajax({
		url: '/pasantia/FQA/traer_peguntas.php',
		type: 'POST' ,
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
    $("#List").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}
$(document).on('keyup','#caja_busqueda', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}
});

//buscador en listas de pregunta panel administrativo
$(buscar_preguntas());
function buscar_preguntas(consulta){
	$.ajax({
		url: '/pasantia/FQA/mostrar.php',
		type: 'POST' ,
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(pregunta){
	$("#tabla_eliminar").html(pregunta);
	})
	.fail(function(){
		console.log("error");
	});
}
$(document).on('keyup','#buscar', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_preguntas(valor);
	}else{
		buscar_preguntas();
	}
});



//buscador en listas de tramites
$(buscar_tramite());
function buscar_tramite(consulta){
	$.ajax({
		url: '/pasantia/tramites/traer_tramite.php',
		type: 'POST' ,
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(tramite){
	$("#tramites").html(tramite);
	})
	.fail(function(){
		console.log("error");
	});
}
$(document).on('keyup','#caja', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_tramite(valor);
	}else{
		buscar_tramite();
	}
});

//buscador par lista de vehiuclos abandonados

$(buscar_datos());
function buscar_datos(consulta){
	$.ajax({
		url:'/pasantia/abandono/traer_vehiculos_abandonado.php',
		type: 'POST' ,
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#tabla_datos").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}
$(document).on('keyup','#caja_abandono', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}
});