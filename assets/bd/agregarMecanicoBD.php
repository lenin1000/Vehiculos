<?php

$mysqli= mysqli_connect('localhost', 'root', '', 'icarplus');

if(isset($_POST['action'])){


    if($_POST['action']=="Agregar"){

        insertarMecanico();

    }


}


function insertarMecanico(){

    
    global $mysqli;

    $cedulaCLIENT=$_POST['cedulatxt'];

    $nombreCLIENT= $_POST['nombretxt'];

    $telefonoCLIENT= $_POST['telefonotxt'];

    if(empty($cedulaCLIENT) || empty($nombreCLIENT) || empty($telefonoCLIENT)){

        echo "Rellene todos los campos ";
    
        exit;
    }

    $usuarios= mysqli_query($mysqli, "SELECT id_mecanico 
    FROM mecanicos 
    WHERE cedulaMecanico= '$cedulaCLIENT'");

    if(mysqli_num_rows($usuarios)>0){


        echo "La cédula del usuario ya existe en el sistema";

    }else{

    $usuarioCLIENT= mysqli_query($mysqli, "INSERT INTO mecanicos (cedulaMecanico, nombreMecanico, telefonoMecanico) 
    VALUES('$cedulaCLIENT', '$nombreCLIENT', '$telefonoCLIENT')");

if ($usuarioCLIENT) {
    echo "Mecanico Agregado Exitosamente";
} else {
    echo "No se pudo añadir el Mecanico: " . mysqli_error($mysqli);
}

    }

}

?>