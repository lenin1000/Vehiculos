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
<form action="" method="post">

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"style="font-size:20px">Cédula</label>
                <div class="col-sm-6">
                        <input type="number" class="cedulatxt form-control"style="font-size:20px" placeholder="Cédula" id="cedulatxt" name="Apellido" >
                </div>
            </div> 

            <div class="row mb-3">
            <input type="hidden" name="" id="action" value="Agregar">
                <label class="col-sm-3 col-form-label" style="font-size:20px" >Nombre</label>
                <div class="col-sm-6">
                        <input type="text" class="nombretxt form-control"style="font-size:20px" placeholder="Nombre" id="nombretxt" name="Nombre">
                </div>
            </div>


            <div class="row mb-3">
                <label class="col-sm-3 col-form-label"style="font-size:20px">Teléfono</label>
                <div class="col-sm-6">
                        <input type="number" class="telefonotxt form-control"style="font-size:20px" placeholder="Teléfono" id="telefonotxt" name="Correo" >
                </div>
            </div>


            </div>
        </form>
        <button type="button" class="btn btn-primary" onclick="agregarMecanico();">Agregar Mecanico</button>
        <button type="button" class="btn btn-secondary" onclick="location.href='../admin/mecanicos.php'">Regresar</button>


</section>




<footer class="footer">

   &copy; Todos los derechos reservado por <span>iCarPlus</span> | 2023 all rights reserved!

</footer>

<!-- custom js file link  -->

<script src="../Scripts/home.js"></script>

<?php require "../Scripts/mainAgregarMecanico.php"; ?>
   
</body>
</html>