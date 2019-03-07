<?php
session_start();
if(!isset($_POST['tipo_accion']) && !isset($_SESSION["user"])){

  echo '<script> alert("El nombre de usuario ha sido tomado!"); </script>';
  echo "<script> location.href = '../index.php'; </script>";
}

if(!isset($_SESSION["user"])){
header ("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>SmartFinances</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">


    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <!--=============================== SCRIPTS =================================-->


    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.js"></script>
    <script src="../vendors/Chart.js/dist/Chart.bundle.js"></script>

    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>



  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="../production/plantilla.php" class="site_title"><img src="images/logo.png" alt="" width="40px"> <span>SmartFinances</span></a>

            </div>

            <div class="clearfix"></div>
            <?php
            $nombreU = $_SESSION["user"];
            $urlImage = 'images/users/'.$nombreU.'.jpg';
            global $con;
          $sql = "SELECT * FROM usuarios where usuario = '$nombreU'";
          $result = $con->query($sql);
          while($row = $result->fetch_assoc()) {
          $picConfirmar = $row['foto'];
          }
             ?>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
              <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">

              <?php if($picConfirmar != 1){
echo '  <img style="width:60px!important;height:60px!important;" src="images/user.png" alt="..." class="img-circle profile_img">';
}else{
  echo '  <img style="width:60px!important;height:60px!important;" src="'.$urlImage.'" alt="..." class="img-circle profile_img">';
} ?>

            
              
              
              </a>
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2><?php echo $_SESSION['nombre']; ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />
