$(function() {
  load(1);
});

function load(page){
  var query=$("#q").val();
  var per_page=10;
  var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};

  $("#loader").fadeIn('slow');
  $.ajax({
    url:'Controlador_ajax/vista_curso.php',
    data: parametros,
     beforeSend: function(objeto){
    $("#loader").html("Cargando...");
    },
    success:function(data){
      $(".outer_div").html(data).fadeIn('slow');
      $("#loader").html("");
    },
    error : function(xhr, status) {
      alert('Disculpe, existió un problema');
  },
  })

}


$('#editCursoModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    
    var name = button.data('name') 
    $('#edit_name').val(name)

    var price = button.data('price') 
    $('#edit_price').val(price)

    var code = button.data('code') 
    $('#edit_code').val(code)

  })

  $( "#edit_curso" ).submit(function( event ) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "Controlador_ajax/editar_curso.php",
        data: parametros,
         beforeSend: function(objeto){
          $("#resultados").html("Enviando...");
          },
        success: function(datos){
        $("#resultados").html(datos);
        load(1);
        $('#editCursoModal').modal('hide');
        }
    });
    event.preventDefault();
  });

  $('#deleteCursoModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var id = button.data('id');
    $('#delete_id').val(id);
  })

  $( "#delete_curso" ).submit(function( event ) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "Controlador_ajax/eliminar_curso.php",
        data: parametros,
         beforeSend: function(objeto){
          $("#resultados").html("Enviando...");
          },
        success: function(datos){
        $("#resultados").html(datos);
        load(1);
        $('#deleteCursoModal').modal('hide');
        }
    });
    event.preventDefault();
  });

  $( "#add_curso" ).submit(function( event ) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "Controlador_ajax/guardar_curso.php",
        data: parametros,
         beforeSend: function(objeto){
          $("#resultados").html("Enviando...");
          },
        success: function(datos){
        $("#resultados").html(datos);
        load(1);
        $('#addCursoModal').modal('hide');
        }
    });
    event.preventDefault();
  });