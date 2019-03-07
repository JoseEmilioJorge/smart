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

include '../controladores/controlador-config.php';

function llenarFormulario($identificacion,$empresa,$ingresos,$genero,$edad,$email,$direccion,$celular,$id){


$sql1 = "UPDATE usuarios SET identificacion='$identificacion' WHERE id = $id ";
global $con;
if ($con->query($sql1) === TRUE) {
} else {
    echo "Error: " . $sql1 . "<br>" . $con->error;
}

$sql2 = "INSERT INTO cliente_info (identificacion, empresa, ingresos, genero, tel, fecha_nac, id_cliente, estatus, direccion)
VALUES ('$identificacion','$empresa','$ingresos','$genero','$celular','$edad','$id','1','$direccion')";
global $con;
if ($con->query($sql2) === TRUE) {
  //echo '<script> alert("Datos actualizados correctamente!"); </script>';
  echo '<script>

  swal("La información se guardo correctamente.")
.then((value) => {
  document.location.href=\'../../index.php\';
});

 </script>';
} else {
;
    echo '<script>
    swal("Ha ocurrido el siguiente error: '.$con->error.' en la consulta")
  .then((value) => {
    document.location.href=\'../../index.php\';
  });
   </script>';

}


$con->close();
}

?>
