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
   <title>iCarPlus - Inicio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
      <link rel="stylesheet" href="../../assets/admin.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.php" class="logo">iCarPlus</a>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
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

   <nav class="navbar">

         
         <a href='admin.php'><i class='fas fa-home'></i><span>Inicio</span></a> 
         <a href='vehiculos.php'><i class="fa-solid fa-car"></i><span>Vehiculos</span></a> 
         <a href='repuestos.php'><i class="fa-solid fa-repeat"></i><span>Repuestos</span></a> 
         <a href='clientes.php'><i class="fa-solid fa-user"></i><span>Clientes</span></a> 
         <a href='mecanicos.php'><i class="fa-regular fa-user"></i><span>Mecanicos</span></a> 
      

   </nav>

</div>


<section class="courses">

   <h1 class="heading">Bienvenido Administrador </h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <img src="../img/pic-3.jpg" alt="">
            <div class="info">
            <h3><?php echo $user['nombreUsuario'];?></h3>
            </div>
         </div>
         <div class="thumb">
            <img src="../img/loginIMG.webp" alt="">
         </div>
      </div>

      <!--<div class="box">
         <div class="tutor">
            <img src="images/pic-3.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete CSS tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-4.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-3.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete JS tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete Boostrap tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-6.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-5.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete JQuery tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div class="info">
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-6.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete SASS tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

   </div>-->

   <!--<div class="more-btn">
      <a href="courses.html" class="inline-option-btn">view all courses</a>
   </div>-->

</section>















<footer class="footer">

   &copy; Todos los derechos reservado por <span>iCarPlus</span> | 2023 all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="../Scripts/home.js"></script>

   
</body>
</html>