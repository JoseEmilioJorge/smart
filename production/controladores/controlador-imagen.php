<?php include 'controlador-config.php'; 

?>
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
session_start();
$userN = $_SESSION["user"];

//Si se quiere subir una imagen
if (isset($_POST['subir'])) {
   //Recogemos el archivo enviado por el formulario
   $archivo = $_FILES['archivo']['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['archivo']['type'];
      $tamano = $_FILES['archivo']['size'];
      $temp = $_FILES['archivo']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        echo '<script>
      swal("La extensión o el tamaño de los archivos no es correcta. Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.")
      .then((value) => {
        document.location.href=\'../../index.php\';
      }); </script>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, '../images/users/'.$userN.'.jpg')) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('../images/users/'.$userN.'.jpg', 0777);
            //Mostramos el mensaje de que se ha subido co éxito

            global $con;
            $user = $_SESSION["user"];
            $sql = "UPDATE usuarios SET foto = '1' WHERE usuario = '$user'";
            if (mysqli_query($con, $sql)) {
            
            } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
            mysqli_close($con);


            echo '<script>
          swal("Se ha subido correctamente la imagen.")
          .then((value) => {
            document.location.href=\'../../index.php\';
          }); </script>';
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<script>
         swal("Erro al intentar subir la imagen.")
         .then((value) => {
           document.location.href=\'../../index.php\';
         }); </script>';
        }
      }
   }
}
?>
