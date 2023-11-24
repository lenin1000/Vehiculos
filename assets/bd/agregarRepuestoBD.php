<?php

$mysqli = mysqli_connect('localhost', 'root', '', 'icarplus');

if (isset($_POST['action'])) {
    if ($_POST['action'] == "Agregar") {
        insertarRepuesto();
    }
}

function insertarRepuesto()
{
    global $mysqli;

    $nombreRepuesto = $_POST['nombretxt'];
    $marcaRepuesto = $_POST['marcatxt'];
    $estadoRepuesto = $_POST['clasificaciontxt'];

    if (empty($nombreRepuesto) || empty($marcaRepuesto) || empty($estadoRepuesto)) {
        echo "Rellene todos los campos ";
        exit;
    }

    $resultado = mysqli_query($mysqli, "INSERT INTO repuestos (nombreRepuesto, MarcaRepuesto, Asignado) 
    VALUES('$nombreRepuesto', '$marcaRepuesto', '$estadoRepuesto')");

    if ($resultado) {
        echo "Repuesto Agregado Exitosamente";
    } else {
        echo "No se pudo añadir el Repuesto: " . mysqli_error($mysqli);
    }
}

?>