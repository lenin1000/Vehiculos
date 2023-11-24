<?php


require "assets/bd/login.php";

if(isset($_SESSION['id'])){

  if($_SESSION['Login']==true){

  header("location: assets/admin/admin.php ");

  }elseif($_SESSION['Login']==false){

    header("location: main_app/emple/empleado.php ");

  }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>iCarPlus-Login</title>
</head>
<body>
    
<!-- Section: Design Block -->
<section class=" text-center text-lg-start">

   <h2 class="tituloLogin">iCarPlus</h2>


  <div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="assets/img/loginIMG.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">

          <form action="" method="post">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="hidden" name="" id="action" value="Login">
              <input type="number" id="cedulatxt" class="cedulatxt form-control" />
              <label class="form-label" for="form2Example1">Ingresar Cédula</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="contrasenatxt" class="contrasenatxt form-control" />
              <label class="form-label" for="form2Example2">Contraseña</label>
            </div>

   

            <!-- Submit button -->
            <button type="button" onclick="submitData();" class="btn btn-primary btn-block mb-4">Ingresar</button>

          </form>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->


<?php require "assets/Scripts/main.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>