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
   <title>Editar Perfil</title>

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
         <a href="profile.php" class="btn">Ver perfil</a>
         <div class="flex-btn">
            <a href="cerrarsesion.php" class="option-btn">Cerrar sesión</a>
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
      <a href="profile.php" class="btn">Ver perfil</a>
   </div>

   <nav class="navbar-sex">
  
         <a href='admin.php'><i class='fas fa-home'></i><span>Inicio</span></a> 
         <a href='vehiculos.php'><i class="fa-solid fa-car"></i><span>Vehiculos</span></a> 
         <a href='repuestos.php'><i class="fa-solid fa-repeat"></i><span>Repuestos</span></a> 
         <a href='clientes.php'><i class="fa-solid fa-user"></i><span>Clientes</span></a> 
         <a href='mecanicos.php'><i class="fa-regular fa-user"></i><span>Mecanicos</span></a> 

   </nav>

</div>


<section class="courses">

<h1>Datos del Usuario</h1>


<div class="table">
        <div class="card xl-4">
          <div class="card-body">
            <div class="row">
              <div class="col-xl-3">
                <h2 class="mb-0">Nombre</h2>
              </div>
              <div class="col-xl-9">
              <h2 class="text-muted mb-0"><?php echo $user['nombreUsuario'];?></h2>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-xl-3">
              <h2 class="mb-0">Cedula</h2>
              </div>
              <div class="col-xl-9">
              <h2 class="text-muted mb-0"><?php echo $user['cedulaUsuario'];?></h2>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-xl-3">
              <h2 class="mb-0">Contraseña</h2>
              </div>
              <div class="col-xl-9">
              <h2 class="text-muted mb-0"><?php echo $user['contrasenaUsuario'];?></h2>
              </div>
            </div>
            <hr>
          </div>
        </div>

        


</section>

<footer class="footer">

   &copy; Todos los derechos reservado por <span>Corblaserca</span> | 2023 all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="../Scripts/home.js"></script>

   
</body>
</html>