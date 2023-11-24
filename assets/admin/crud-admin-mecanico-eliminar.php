<?php
require "../bd/login.php";

if (!isset($_SESSION['id'])) {
    header("location: ../../index.php");
    exit;
}

if (isset($_GET['deleteid'])) {
    $delete_id = $_GET['deleteid'];
    $query = "DELETE FROM mecanicos WHERE cedulaMecanico = '$delete_id'";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        // La eliminación fue exitosa
        header("Location: ./mecanicos.php");
        exit;
    } else {
        // Manejar el caso en que la eliminación falla
        echo "Error al eliminar el Mecanico";
    }
} else {
    // Manejar el caso en que no se proporciona un ID válido para eliminar
    echo "ID de mecanico no válido";
}
?>