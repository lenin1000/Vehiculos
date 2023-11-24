<?php

$mysqli= mysqli_connect('localhost', 'root', '', 'icarplus');

if(isset($_POST['action'])){


    if($_POST['action']=="Editar"){

        ActualizarMecanico();

    }


}


function  ActualizarMecanico(){

    
    global $mysqli;

    $idCLIENT=$_POST['id'];

    $cedulaCLIENT=$_POST['cedula'];

    $nombreCLIENT= $_POST['nombre'];

    $telefonoCLIENT= $_POST['telefono'];

    if(empty($cedulaCLIENT) || empty($nombreCLIENT) || empty($telefonoCLIENT)){

        echo "Rellene todos los campos ";
    
        exit;
    }

    $usuarios = mysqli_query($mysqli, "UPDATE mecanicos 
    SET cedulaMecanico='$cedulaCLIENT', nombreMecanico='$nombreCLIENT', telefonoMecanico='$telefonoCLIENT' 
    WHERE id_mecanico='$idCLIENT'");


   if ($usuarios) {
    echo "Mecanico Actualizado";
} else {
    echo "No se pudo actualizar el Mecanico: " . mysqli_error($mysqli);
  }
}



?>