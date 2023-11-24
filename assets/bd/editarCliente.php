<?php

$mysqli= mysqli_connect('localhost', 'root', '', 'icarplus');

if(isset($_POST['action'])){


    if($_POST['action']=="Editar"){

        ActualizarClient();

    }


}


function  ActualizarClient(){

    
    global $mysqli;

    $idCLIENT=$_POST['id'];

    $cedulaCLIENT=$_POST['cedula'];

    $nombreCLIENT= $_POST['nombre'];

    $direccionCLIENT= $_POST['direccion'];

    $telefonoCLIENT= $_POST['telefono'];

    if(empty($cedulaCLIENT) || empty($nombreCLIENT) || empty($direccionCLIENT) || empty($telefonoCLIENT)){

        echo "Rellene todos los campos ";
    
        exit;
    }

    $usuarios= mysqli_query($mysqli, "UPDATE clientes 
    set nombreCliente= '$nombreCLIENT', cedulaCliente='$cedulaCLIENT', direccion='$direccionCLIENT'
    ,telefono= '$telefonoCLIENT' 
    WHERE id_cliente= '$idCLIENT'");


   if ($usuarios) {
    echo "Cliente Actualizado";
} else {
    echo "No se pudo actualizar el Cliente: " . mysqli_error($mysqli);
  }
}



?>