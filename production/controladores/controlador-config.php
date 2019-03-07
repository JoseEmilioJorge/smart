<?php

date_default_timezone_set('America/Santo_Domingo');

///////////////////////////////

global $con;
$con = new mysqli("localhost", "root", "", "smartfinances");
//$conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
global $tasa;
global $mora;

    $sql = "SELECT * FROM tasa_mora";
      $result = $con->query($sql);
    while($row = $result->fetch_assoc()) {

      if($row['nombre'] == 'tasa'){
       $tasa = $row['porciento'];
      }elseif($row['nombre'] == 'mora'){
      $mora = $row['porciento'];
      }

     }
 ?>
