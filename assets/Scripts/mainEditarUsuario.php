<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script type="text/javascript">

function submitDataEditar(){

$(document).ready(function(){

var data = {


    id: $('#id').val(),

    nombre: $('#nombre').val(),

    cedula: $('#cedula').val(),

    direccion: $('#direccion').val(),

    telefono: $('#telefono').val(),

    action: $('#action').val(),

};


$.ajax({

  url: '../bd/editarCliente.php',

  type: 'post',

  data: data,

  success:function(response){

     alert(response);

     if(response=="Cliente Actualizado"){


        window.location.reload();
     }

  }


});


});


}

</script>