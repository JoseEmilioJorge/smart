
<?php
include 'controlador-config.php';
include 'controlador-actividad.php';
include '../modelos/modelo-usuario.php';
session_start(); ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- SWEETALERT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  </body>
</html>


<?php

//////////////////////////////Iniciar Sesion/////////////////////////////////////

if(isset($_POST['tipo_accion']) && $_POST['tipo_accion']=="registrar-usuario"){

$nombres = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$password = $_POST['password'];

global $con;

////Iniciar Sesion

        $buscarUsuario = "SELECT * FROM usuarios WHERE usuario = '$usuario' or email = '$email' ";
          $result = $con->query($buscarUsuario);
             $count = mysqli_num_rows($result);
        if ($count == 1) {
              echo '<script> alert("El nombre de usuario o email han sido tomado !"); </script>';
              echo "<script> location.href = '../plantilla.php'; </script>";
            }else{
                registrarUsuario($nombres,$apellidos,$usuario,$email,$password);}
}

///////////////////////////////////////////////////////////////
///////////ELIMINAR EL USUARIO QUE SE ELIJA EN LA TABLA///////
/////////////////////////////////////////////////////////////


if(isset($_POST['tipo_accion']) && $_POST['tipo_accion']=="elimininar-usuario"){
  
$Eliminado = $_POST['deleteUser'];
$nombreElimado = $_POST['nombre'];
/////Para la actividad
$user = $_SESSION['user'];
$contenido = 'Ha eliminado el usuario "'.$nombreElimado.'".';
$contenido2 = 'Ha intentado eliminar el usuario "'.$nombreElimado.'".';
$accion = 'Eliminar Usuario';

  global $con;
  ////Eliminar Usuario
  
if($Eliminado != ""){
  
  $consulta = "DELETE FROM usuarios WHERE id = $Eliminado";
  $result = mysqli_query($con,$consulta); 
  
  echo '<script>
    swal("El usuario se ha elimado de nuestro sistema!")
    .then((value) => {
      document.location.href=\'../../index.php\';
    }); </script>';

    controlActivities($contenido, $user, $accion);
  }else{
    echo '<script>
    swal("Por alguna razon no se pudo eliminar!")
    .then((value) => {
     document.location.href=\'../../index.php\';
    }); </script>';
    controlActivities($contenido2, $user, $accion);
  }
}


?>
