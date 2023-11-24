<?php 

require "../bd/login.php";

if (!isset($_SESSION['id'])) {
    header("location: ../../index.php");
    exit;
}

if (isset($_GET['editarid'])) {
    $editar_id = $_GET['editarid'];
    $query = "SELECT * FROM clientes WHERE cedulaCliente = '$editar_id'";
    $result = mysqli_query($mysqli, $query);
    $cliente = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Editar usuario <?php echo $cliente['nombreCliente']; ?></title>
</head>
<body>
    <div class="container my-9">
        <h2>Editar <?php echo $cliente['nombreCliente'];?> </h2>
        <form action="" method="post" class="Formulario"></form>
          <input type="hidden" name="" id="action" value="Editar">

          <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ID</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" onkeydown="return /[a-z]/i.test(event.key)" placeholder="ID" readonly id="id" name="id" value="<?php echo $cliente['id_cliente'];?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nombre</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" onkeydown="return /[a-z]/i.test(event.key)" placeholder="Nombre" id="nombre" name="nombre" value="<?php echo $cliente['nombreCliente'];?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Cédula</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" onkeydown="return /[a-z]/i.test(event.key)" placeholder="Cédula" id="cedula" name="cedula" value="<?php echo $cliente['cedulaCliente'];?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Dirección</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Direccion" id="direccion" name="direccion" value="<?php echo $cliente['direccion'];?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Teléfono</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" maxlength="10" inputMode="numeric" placeholder="Télefono" id="telefono" name="telefono" value="<?php echo $cliente['telefono'];?>">
                </div>
            </div>

            <button type="button" onclick="submitDataEditar();" class="btn btn-primary btn-block mb-4">Ingresar</button>

            <button type="button" class="btn btn-secondary" onclick="location.href='clientes.php'">Regresar</button>

            <?php require "../Scripts/mainEditarUsuario.php"; ?>

<?php } else {
    // Manejar el caso en que no se proporciona un ID válido para editar
    echo "ID de cliente no válido";
}
?>
