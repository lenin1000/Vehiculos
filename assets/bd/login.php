<?php


session_start();

$mysqli= mysqli_connect('localhost', 'root', '', 'icarplus');


if(isset($_POST['action'])){


    if($_POST['action']=="Login"){

        login();

    }


}



function login(){

global $mysqli;

$cedula= $_POST['cedulatxt'];

$contrasena= $_POST['contrasenatxt'];

if(empty($cedula) || empty($contrasena)){

    echo "Rellene todos los campos ";

    exit;
}

$usuarios= mysqli_query($mysqli, "SELECT id_usuario, nombreUsuario, rol 
FROM usuarios 
WHERE cedulaUsuario= '$cedula'
AND contrasenaUsuario= '$contrasena'");

if (mysqli_num_rows($usuarios)>0){

    $datos= mysqli_fetch_assoc($usuarios);

    $rol= $datos['rol'];

    if($rol=="Administrador"){

        $_SESSION['Login']=true;

        $_SESSION['id']= $datos['id_usuario'];

       echo "Bienvenido Administrador";

       

    }elseif($rol=="Empleado")   {
        
        $_SESSION['Login']=false;

        $_SESSION['id']= $datos['id_usuario'];

        echo "Bienvenido Empleado";

    }

 

}else{


    echo "Campos invalidos";

    exit;

}

}




/*if ($usuarios->num_rows == 1):
    $datos= $usuarios->fetch_assoc();
    echo json_encode(array('error' => false, 'tipo' => $datos['rol']));
else:
    echo json_encode(array('error' => true));

endif;*/
?>