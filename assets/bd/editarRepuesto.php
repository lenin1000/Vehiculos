<?php

$mysqli= mysqli_connect('localhost', 'root', '', 'icarplus');

if(isset($_POST['action'])){


    if($_POST['action']=="Editar"){

        ActualizarRepuesto();

    }


}


function  ActualizarRepuesto(){

    
    global $mysqli;

    $idCLIENT=$_POST['id'];

    $nombreREPUESTO=$_POST['cedula'];

    $marcaREPUESTO= $_POST['nombre'];

    $ASIGNADO= $_POST['clasificaciontxt'];

    if(empty($nombreREPUESTO) || empty($marcaREPUESTO) || empty($ASIGNADO)){

        echo "Rellene todos los campos ";
    
        exit;
    }

    $usuarios = mysqli_query($mysqli, "UPDATE repuestos 
    SET nombreRepuesto='$nombreREPUESTO', MarcaRepuesto='$marcaREPUESTO', Asignado='$ASIGNADO' 
    WHERE id_repuesto='$idCLIENT'");


   if ($usuarios) {
    echo "Repuesto Actualizado";
} else {
    echo "No se pudo actualizar el Mecanico: " . mysqli_error($mysqli);
  }
}



?>