<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script type="text/javascript">

function agregarMecanico(){

$(document).ready(function(){

var data = {


    nombretxt: $('#nombretxt').val(),

    cedulatxt: $('#cedulatxt').val(),

    telefonotxt: $('#telefonotxt').val(),

    action: $('#action').val(),

};


$.ajax({

  url: '../bd/agregarMecanicoBD.php',

  type: 'post',

  data: data,

  success:function(response){

     alert(response);

     if(response=="Mecanico Agregado Exitosamente"){


        window.location.reload();
     }

  }


});


});


}

</script>