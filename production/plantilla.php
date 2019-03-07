<?php
include 'controladores/controlador-config.php';
include 'controladores/controlador-actividad.php';
////INICIO DE SESSION
if(isset($_POST['tipo_accion']) && $_POST['tipo_accion']=="ingresar"){
  $password = $_POST['password'];
  $usuario = $_POST['usuario'];
global $con;
global $tasa;
global $mora;
  $sql = "SELECT * FROM usuarios";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          if($row['password'] == $password && $row['usuario'] == $usuario){

            session_start();
            $_SESSION["user"]=$row['usuario'];
            $_SESSION["email"]=$row['email'];
            $_SESSION["nombre"]=$row['nombre'];
            $_SESSION["apellidos"]=$row['apellido'];

            header ("Location: plantilla.php");
          }
      }
  } else {
    echo '<script> alert("El nombre de usuario ha sido tomado!"); </script>';
    echo "<script> location.href = '../index.php'; </script>";
  }
}

?>
<?php include 'vistas/header.php'; ?>
<?php include 'vistas/menu.php'; ?>
<?php include 'vistas/barra-navegation.php'; ?>
<?php

if(isset($_GET["ruta"])){

  if($_GET["ruta"] == "inicio" ||
     $_GET["ruta"] == "usuarios" ||
     $_GET["ruta"] == "formulario-cliente" ||
     $_GET["ruta"] == "productos" ||
     $_GET["ruta"] == "prestamos" ||
     $_GET["ruta"] == "perfil-usuario" ||
     $_GET["ruta"] == "salir"){

    include "vistas/".$_GET["ruta"].".php";

  }
}else{
include 'vistas/inicio.php';}
include 'vistas/footer.php';
?>
