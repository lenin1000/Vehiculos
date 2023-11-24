<?php
require "../bd/login.php";

if (!isset($_SESSION['id'])) {
    header("location: ../../index.php");
    exit;
}

$id = $_SESSION["id"];
$user = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM usuarios WHERE id_usuario= $id"));
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Editar</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../../assets/style copy.css">

      

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.php" class="logo">iCarPlus</a>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <!--<div id="toggle-btn" class="fas fa-sun"></div>-->
         </div>

      <div class="profile">
         <img src="../img/pic-1.jpg" class="image" alt="">
         <h3 class='name'><?php echo $user['nombreUsuario'];?></h3>
         <p class='role'><?php echo $user['rol'];?></p>
         <a href="../admin/profile.php" class="btn">Ver perfil</a>
         <div class="flex-btn">
            <a href="../admin/cerrarsesion.php" class="option-btn">Cerrar sesión</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="../img/pic-1.jpg" class="image" alt="">
      <h3 class='name'><?php echo $user['nombreUsuario'];?></h3>
         <p class='role'><?php echo $user['rol'];?></p>
      <a href="../admin/profile.php" class="btn">Ver perfil</a>
   </div>

   <nav class="navbar-sex">
   
         <a href='../admin/admin.php'><i class='fas fa-home'></i><span>Inicio</span></a> 
         <a href='../admin/vehiculos.php'><i class="fa-solid fa-car"></i><span>Vehiculos</span></a> 
         <a href='../admin/repuestos.php'><i class="fa-solid fa-repeat"></i><span>Repuestos</span></a> 
         <a href='../admin/clientes.php'><i class="fa-solid fa-user"></i><span>Clientes</span></a> 
         <a href='../admin/mecanicos.php'><i class="fa-regular fa-user"></i><span>Mecanicos</span></a> 


   </nav>

</div>


<section class="courses">

<h1>Configuraciones del Usuario</h1>


<div class="table">
<form action="" method="post" enctype="multipart/form-data" id="vehiculoForm">
            <div class="row mb-3">
            <input type="hidden" name="" id="action" value="Agregar">
                <label class="col-sm-3 col-form-label" style="font-size:20px" >Marca Vehículo</label>
                <div class="col-sm-6">
                        <input type="text" class="marcatxt form-control"style="font-size:20px" placeholder="Marca" id="marcatxt" name="Nombre">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"style="font-size:20px">Modelo Vehículo</label>
                <div class="col-sm-6">
                        <input type="text" class="modelotxt form-control"style="font-size:20px" placeholder="Modelo" id="modelotxt" name="Apellido" >
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"style="font-size:20px">Tipo</label>
                <div class="col-sm-6">
                        <input type="text" class="tipotxt form-control"style="font-size:20px" placeholder="Tipo" id="tipotxt" name="Correo" >
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"style="font-size:20px">Año</label>
                <div class="col-sm-6">
                        <input type="number" class="anotxt form-control"style="font-size:20px" placeholder="Año" id="anotxt" name="Correo" >
                </div>
            </div>

            <input type="hidden" id="nombreArchivo" name="nombreArchivo">

<!-- Modifica el input de archivo para incluir el evento onchange -->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="font-size:20px">Selecciona la imagen:</label>
                <div class="col-sm-6">
                    <input type="file" id="fileInput" name="fileInput" accept="image/*" class="fileInput form-control" style="font-size:20px" placeholder="Imagen" onchange="updateFileName()">
                </div>
            </div>



            <div class="row mb-3">
         <label class="col-sm-3 col-form-label" style="font-size: 20px">Clasificación</label>
    <div class="col-sm-6">
        <select class="clasificaciontxt form-select" style="font-size: 20px" id="clasificaciontxt" name="anoSelect">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <!-- Agrega más opciones según sea necesario -->
        </select>
    </div>
</div>


            </div>
        </form>

        <script>
    // Agrega este script para actualizar el nombre del archivo en el campo oculto
    function updateFileName() {
        var fileName = document.getElementById('fileInput').value;
        // Extrae solo el nombre del archivo (sin la ruta completa)
        var fileNameWithoutPath = fileName.replace(/^.*[\\\/]/, '');
        document.getElementById('nombreArchivo').value = fileNameWithoutPath;
    }
</script>


        <button type="button" class="btn btn-primary" onclick="agregarVehiculo();">Agregar Vehículo</button>
        <button type="button" class="btn btn-secondary" onclick="location.href='../admin/vehiculos.php'">Regresar</button>


</section>















<footer class="footer">

   &copy; Todos los derechos reservado por <span>Corblaserca</span> | 2023 all rights reserved!

</footer>

<!-- custom js file link  -->

<script src="../Scripts/home.js"></script>

<?php require "../Scripts/mainAgregarVehiculo.php"; ?>
   
</body>
</html>