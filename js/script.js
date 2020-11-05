// funcion para mostrary ocutar
$(document).ready(function(){
  var uno = document.getElementById('formulario_uno');
  var dos = document.getElementById('formulario_dos'); 
  var tres = document.getElementById('seccion_cero');
  var cuatro = document.getElementById('seccion_abandono')
  var cinco = document.getElementById('seccion_user');

  $('#generar_pregunta').click(function(){
    uno.style.display="block";
    dos.style.display="none";
    tres.style.display="none"
    cuatro.style.display="none";
    cinco.style.display="none";
    })
    $('#editar').click(function(){
      uno.style.display="none";
      dos.style.display="block"; 
      tres.style.display="none"
      cuatro.style.display="none";
      cinco.style.display="none";
    })
    $('#inicio').click(function(){
      uno.style.display="none";
      dos.style.display="none"; 
      tres.style.display="block"
      cuatro.style.display="none";
      cinco.style.display="none";
    })
    $('#ver_datos').click(function(){
      uno.style.display="none";
      dos.style.display="none"; 
      tres.style.display="none"
      cuatro.style.display="block";
      cinco.style.display="none";
    })
    $('#generar_user').click(function(){
      uno.style.display="none";
      dos.style.display="none"; 
      tres.style.display="none"
      cuatro.style.display="none";
      cinco.style.display="block";
    })

})
//funcion para guardar preguntas
$(document).ready(function(){
  $('#enviar').click(function(){
      $.ajax({
        url: '/pasantia/FQA/guardar.php',
        method:'POST',
        data: $('#todo').serialize(),
        success:function(T){
          $('#validar_preguntas').html(T)
          $('#tabla_eliminar').load('/pasantia/FQA/mostrar.php');
          document.getElementById('todo').reset();
        }
      })
  })
})

//mostrar la tabla elimirnar
  $(document).ready(function(){
function mostrar(){
  $.ajax({
      url:'/pasantia/FQA/mostrar.php',
      method:'POST',
      success:function(dto){
        $('#tabla_eliminar').html(dto)
      }
  })
}
mostrar()
});

 //mostrar preguntas en la tabla
$(document).ready(function(){
   //llamra datos
  function mostrar_preguntas(){
    $.ajax({
        url:'/pasantia/FQA/traer_peguntas.php',
        method:'POST',
        success:function(dt1){
          $('#List').html(dt1)
        }
    })
  }
  mostrar_preguntas()
});

 // eliminar pregunta y respuesta
function eliminar_dto(traer){
  Swal.fire({
    title: 'Deseas eliminar este registro?',
    position: 'top-end',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Eliminar!',
    cancelButtonText: 'Cancelar!',
  }).then((eliminar) => {
    if (eliminar.isConfirmed) {
      $.ajax({
        url:'/pasantia/FQA/eliminar_pregunta.php',
        type: 'POST',
        data: {traer:traer},
      })
      .done(function(r) {
          Swal.fire({
              position:'top-end',
              icon: 'success',
              title: 'Registro eliminado',
              showConfirmButton: false,
              timer: 1500
            })
      })
      $('#tabla_eliminar').load('/pasantia/FQA/mostrar.php')
    }
  })
}

// funcion para ver respuesa
function ver_respuesta(codigo){
  $.ajax({
    url: '/pasantia/FQA/traer_respuesta.php',
    type: 'POST',
    data: {cod:codigo},
  })
  .done(function(dato) {
    var datos = JSON.parse(dato)
    $('#texto-pregunta').html(datos[0]);
    $('#texto-respuesta').html(datos[1]);
  })
  .fail(function() {
    console.log("error");
  })
}

// funciones para listas de traites
$(document).ready(function(){
  //llamra datos
  function mostrar_tramites(){
    $.ajax({
      url:'/pasantia/FQA/traer_tramite.php',
      method:'POST',
      success:function(tramites){
          $('#tramites').html(tramites)
      }
    })
  }
mostrar_tramites()
});


// funcion para ver el valor de los tramites
function ver_valor(codigo){

  $.ajax({
    url: '/pasantia/tramites/traer_valor_tramite.php',
    type: 'POST',
    data: {cod:codigo},
    beforsend:function(){
      //animacion de cargando
    }
  })
  .done(function(dato) {
    $('#valor').html(dato);
  })
  .fail(function() {
    console.log("error");
  })
}

// pintar datos en el formulario actualizar
function actualizar(cdo){
  $.ajax({
    type: 'POST',
      url: '/pasantia/FQA/pintar_datos.php',
      data: {cdo:cdo},
    })
    .done(function(Z) {
      dtos=jQuery.parseJSON(Z);
      $('#id').val(dtos['codigo']);
      $('#ed_pregunta').val(dtos['pregunta']);
      $('#ed_respuesta').val(dtos['respuesta']);
    })
  }

  //enviar datos para actualizar

  $(document).ready(function(){
    $('#ed_enviar').click(function(){
      $.ajax({
        type: "POST",
        url: "/pasantia/FQA/actualizar.php",
        data: $('#ed_formulario').serialize(),
        success: function (X) {
          if (X) {
            Swal.fire({
              icon: 'success',
              title: 'actualizacion correcta',
            })
            $('#tabla_eliminar').load('/pasantia/FQA/mostrar.php');
          }else{
            Swal.fire({
              icon: 'error',
              title: 'Actualizacion fallida',
            })
          }
        }
      });

    })
  })
//traer dtos de vehiculos en estado de abandono
$(document).ready(function(){
  $.ajax({
    url:'/pasantia/abandono/traer_vehiculos_abandonado.php',
    method:'POST',
    success:function(dto){
        $('#tabla_datos').html(dto);
    }
  })
});
//enviar datos lo login
$(document).ready(function(){
  $('#sesion').click(function(){
  $cadena = "usuario="+ $('#usuario').val() + "clave=" + $('#contrasena').val();
    $.ajax({
      type: "POST",
      url: "/pasantia/php/confir.php",
      data:$('#formulario_ingreso').serialize(),
      success: function (resultado) {
        if (resultado ==1) {
          window.location="../FQA/cargar.php"
        }else{
          $('#validar_php').html(resultado);
        }
      }
    });

  })
})
 //traer la tabla de los usuarios
$(document).ready(function(){
  $.ajax({
    url:'/pasantia/php/traer_user.php',
    method:'POST',
    success:function(user){
        $('#lista_user').html(user)
    }
  })
});
//enviar datos para la creacion de usuarios
$(document).ready(function(){
  $('#enviar_user').click(function(){
    $.ajax({
      type: "post",
      url: "/pasantia/php/crear_usuario.php",
      data:$('#formulario_user').serialize(),
      success: function (Z) {
          $('#validar_user').html(Z)
          $('#lista_user').load('/pasantia/php/traer_user.php');
          document.getElementById('formulario_user').reset();
      }
    });
  })
})

function eliminar_usuario(cdo){
  Swal.fire({
    title: 'Deseas eliminar este registro?',
    position: 'top-end',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Eliminar!',
    cancelButtonText: 'Cancelar!',
  }).then((eliminar) => {
    if (eliminar.isConfirmed) {
      $.ajax({
        url: '/pasantia/php/eliminar_user.php',
        type: 'POST',
        data: {cdo:cdo},
        success:function(M){
          $('#lista_user').load('/pasantia/php/traer_user.php');
        }
      })
    }
  })
}


//escrip para el menu principal
$(document).ready(main);
var contador = 1;
function main(){
	$('.menu_bar').click(function(){
		// $('nav').toggle();
		if(contador == 1){
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});

};
