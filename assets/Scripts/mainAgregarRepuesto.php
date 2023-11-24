<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script type="text/javascript">

function agregarRepuesto(){

$(document).ready(function(){

var data = {


            nombretxt: $('#nombretxt').val(),
            marcatxt: $('#marcatxt').val(),
            clasificaciontxt: $('#clasificaciontxt').val(),
            action: $('#action').val(),

};


$.ajax({

  url: '../bd/agregarRepuestoBD.php',

  type: 'post',

  data: data,

  success:function(response){

     alert(response);

     if(response=="Repuesto Agregado Exitosamente"){


        window.location.reload();
     }

  }


});


});


}

</script>