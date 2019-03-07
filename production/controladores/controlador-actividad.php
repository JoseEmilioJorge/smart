<?php
include 'controlador-config.php';


function controlActivities($contenido, $user, $accion){
    global $con;
    ////INSERTANDO LOS ACTIVIDADES
    $sql = "INSERT INTO actividad (contenido, usuario, accion)
  VALUES ('$contenido', '$user', '$accion')";
  global $con;
  if ($con->query($sql) === TRUE) {
      
  } else {
      echo "Error: " . $sql . "<br>" . $con->error;
  }
$con->close();
}



?>