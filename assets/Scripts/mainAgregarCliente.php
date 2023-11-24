<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script type="text/javascript">

function agregarCliente(){

$(document).ready(function(){

var data = {


    nombretxt: $('#nombretxt').val(),

    cedulatxt: $('#cedulatxt').val(),

    direcciontxt: $('#direcciontxt').val(),

    telefonotxt: $('#telefonotxt').val(),

    action: $('#action').val(),

};


$.ajax({

  url: '../bd/agregarClienteBD.php',

  type: 'post',

  data: data,

  success:function(response){

     alert(response);

     if(response=="Cliente Agregado Exitosamente"){


        window.location.reload();
     }

  }


});


});


}

</script>