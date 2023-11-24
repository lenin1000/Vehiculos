<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script type="text/javascript">

function agregarVehiculo(){

$(document).ready(function(){

var data = {


    marcatxt: $('#marcatxt').val(),

    modelotxt: $('#modelotxt').val(),

    tipotxt: $('#tipotxt').val(),

    anotxt: $('#anotxt').val(),

    nombreArchivo: $('#nombreArchivo').val(),

    clasificaciontxt: $('#clasificaciontxt').val(),

    action: $('#action').val(),

};


$.ajax({

  url: '../bd/agregarVehiculoBD.php',

  type: 'post',

  data: data,

  success:function(response){

     alert(response);

     if(response=="Vehículo agregado"){


        window.location.reload();
     }

  }


});


});


}

</script>