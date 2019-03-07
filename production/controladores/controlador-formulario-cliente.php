
<?php
include '../modelos/modelo-formulario-cliente.php';
include 'controlador-config.php';
session_start();
if(isset($_POST['tipo_accion']) && $_POST['tipo_accion'] == 'registrar-formulario'){

$identificacion = $_POST['identificacion'];
$empresa = $_POST['empresa'];
$ingresos = $_POST['ingresos'];
$genero = $_POST['genero'];
$edad = $_POST['edad'];

$direccion = $_POST['direccion'];
$celular = $_POST['celular'];

$email = $_SESSION["email"];

global $con;
    $sql = "SELECT id FROM usuarios where email = '$email' ";
      $result = $con->query($sql);
    while($row = $result->fetch_assoc()) {
$id = $row['id'];
    }

llenarFormulario($identificacion,$empresa,$ingresos,$genero,$edad,$email,$direccion,$celular,$id);


}
?>
