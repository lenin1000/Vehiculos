<?php

$mysqli= mysqli_connect('localhost', 'root', '', 'icarplus');

if(isset($_POST['action'])){


    if($_POST['action']=="Agregar"){

        insertarClient();

    }


}


function insertarClient(){

    
    global $mysqli;

    $cedulaCLIENT=$_POST['cedulatxt'];

    $nombreCLIENT= $_POST['nombretxt'];

    $direccionCLIENT= $_POST['direcciontxt'];

    $telefonoCLIENT= $_POST['telefonotxt'];

    if(empty($cedulaCLIENT) || empty($nombreCLIENT) || empty($direccionCLIENT) || empty($telefonoCLIENT)){

        echo "Rellene todos los campos ";
    
        exit;
    }

    $usuarios= mysqli_query($mysqli, "SELECT id_cliente 
    FROM clientes 
    WHERE cedulaCliente= '$cedulaCLIENT'");

    if(mysqli_num_rows($usuarios)>0){


        echo "La cédula del usuario ya existe en el sistema";

    }else{

    $usuarioCLIENT= mysqli_query($mysqli, "INSERT INTO clientes (nombreCliente, cedulaCliente, direccion, telefono) 
    VALUES('$nombreCLIENT', '$cedulaCLIENT', '$direccionCLIENT', '$telefonoCLIENT')");

if ($usuarioCLIENT) {
    echo "Cliente Agregado Exitosamente";
} else {
    echo "No se pudo añadir el Cliente: " . mysqli_error($mysqli);
}

    }

}

?>