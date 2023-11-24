<?php 

require "../bd/login.php";

if (!isset($_SESSION['id'])) {
    header("location: ../../index.php");
    exit;
}

if (isset($_GET['editarid'])) {
    $editar_id = $_GET['editarid'];
    $query = "SELECT * FROM repuestos WHERE id_repuesto = '$editar_id'";
    $result = mysqli_query($mysqli, $query);
    $cliente = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Editar usuario <?php echo $cliente['nombreMecanico']; ?></title>
</head>
<body>
    <div class="container my-9">
        <h2>Editar <?php echo $cliente['nombreRepuesto'];?> </h2>
        <form action="" method="post" class="Formulario"></form>
          <input type="hidden" name="" id="action" value="Editar">

          <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ID</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" onkeydown="return /[a-z]/i.test(event.key)" placeholder="ID" readonly id="id" name="id" value="<?php echo $cliente['id_repuesto'];?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nombre Repuesto</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" onkeydown="return /[a-z]/i.test(event.key)" placeholder="Nombre Repuesto" id="cedula" name="cedula" value="<?php echo $cliente['nombreRepuesto'];?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Marca Repuesto</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" onkeydown="return /[a-z]/i.test(event.key)" placeholder="Marca Repuesto" id="nombre" name="nombre" value="<?php echo $cliente['MarcaRepuesto'];?>">
                </div>
            </div>

            <div class="row mb-3">
         <label class="col-sm-3 col-form-label" style="font-size: 20px">Estado</label>
    <div class="col-sm-6">
        <select class="clasificaciontxt form-select" style="font-size: 20px" id="clasificaciontxt" name="anoSelect" value="<?php echo $cliente['Asignado'];?>">
            <option value="Asignado">Asignado</option>
            <option value="No Asignado">No Asignado</option>

            <!-- Agrega más opciones según sea necesario -->
        </select>
    </div>
</div>

            <button type="button" onclick="submitDataEditar();" class="btn btn-primary btn-block mb-4">Ingresar</button>

            <button type="button" class="btn btn-secondary" onclick="location.href='repuestos.php'">Regresar</button>

            <?php require "../Scripts/mainEditarRepuesto.php"; ?>

<?php } else {
    // Manejar el caso en que no se proporciona un ID válido para editar
    echo "ID de cliente no válido";
}
?>