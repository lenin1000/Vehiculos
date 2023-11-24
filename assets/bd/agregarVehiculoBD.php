<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'icarplus');

if (isset($_POST['action'])) {
    if ($_POST['action'] == "Agregar") {
        insertarVehiculo();
    }
}

// ... código existente ...

function insertarVehiculo()
{
    global $mysqli;

    $marcatxt = $_POST['marcatxt'];
    $modelotxt = $_POST['modelotxt'];
    $tipotxt = $_POST['tipotxt'];
    $anotxt = $_POST['anotxt'];
    $clasificaciontxt = $_POST['clasificaciontxt'];

    // Obtener la imagen codificada en base64 desde el formulario
    $nombreArchivo = $_POST['nombreArchivo'];

    if (empty($marcatxt) || empty($modelotxt) || empty($tipotxt) || empty($anotxt) || empty($clasificaciontxt) || empty($nombreArchivo)) {
        echo "Rellene todos los campos ";
        exit;
    }

    /*$nombreImagen = '../img'.$fileInput;
    $rutaImagen = '../img/' . $nombreImagen;

    file_put_contents($rutaImagen, $imagen);*/

    // Insertar la información en la base de datos
    $consulta = "INSERT INTO vehiculos (marcaVehiculo, modeloVehiculo, tipo, ano, imagen, clasificacion) 
                 VALUES ('$marcatxt', '$modelotxt', '$tipotxt', '$anotxt', '$nombreArchivo', '$clasificaciontxt')";

    $resultado = mysqli_query($mysqli, $consulta);

    if ($resultado) {
        echo "Vehículo agregado";
    } else {
        echo "No se pudo añadir el vehículo: " . mysqli_error($mysqli);
    }
}

?>