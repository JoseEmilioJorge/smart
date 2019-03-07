<?php
include '../controladores/controlador-config.php';


function registrarUsuario ($n,$a,$u,$e,$p){

  $nombres = $n;
  $apellidos = $a;
  $usuario = $u;
  $email = $e;
  $password = $p;

  $sql = "INSERT INTO usuarios (nombre, apellido, usuario, email, password)
  VALUES ('$nombres', '$apellidos', '$usuario','$email','$password')";
  global $con;
  if ($con->query($sql) === TRUE) {

      echo "Proceso exitoso!";
      session_start();
      $_SESSION["user"]=$usuario;
      $_SESSION["email"]=$email;
      $_SESSION["nombre"]=$nombres;
      $_SESSION["apellidos"]=$apellidos;

      header ("Location: ../plantilla.php");

  } else {

      echo "Error: " . $sql . "<br>" . $con->error;

  }
$con->close();
}



?>
