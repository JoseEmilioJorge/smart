


<!--=============================================
          GRAFICOS DE LA VISTA INICIO
=================================================-->
<?php
include 'controlador-config.php';
global $con;
/////CONTAR LOS USUARIOS Y MOSTRAR EN LA GRAFICA////////
$enero1 = mysqli_query($con, "SELECT COUNT(*) AS `enero` FROM `usuarios` WHERE create_date >= '20190101' and create_date <= '20190131'  ");
$row1 = mysqli_fetch_array($enero1);
$enero = $row1['enero'];

$febrero1 = mysqli_query($con, "SELECT COUNT(*) AS `febrero` FROM `usuarios` WHERE create_date >= '20190201' and create_date <= '20190231'  ");
$row2 = mysqli_fetch_array($febrero1);
$febrero = $row2['febrero'];

$marzo1 = mysqli_query($con, "SELECT COUNT(*) AS `marzo` FROM `usuarios` WHERE create_date >= '20190301' and create_date <= '20190331'  ");
$row3 = mysqli_fetch_array($marzo1);
$marzo = $row3['marzo'];

$abril1 = mysqli_query($con, "SELECT COUNT(*) AS `abril` FROM `usuarios` WHERE create_date >= '20190401' and create_date <= '20190431'  ");
$row4 = mysqli_fetch_array($abril1);
$abril = $row4['abril'];

$mayo1 = mysqli_query($con, "SELECT COUNT(*) AS `mayo` FROM `usuarios` WHERE create_date >= '20190501' and create_date <= '20190531'  ");
$row5 = mysqli_fetch_array($mayo1);
$mayo = $row5['mayo'];

$junio1 = mysqli_query($con, "SELECT COUNT(*) AS `junio` FROM `usuarios` WHERE create_date >= '20190601' and create_date <= '20190631'  ");
$row6 = mysqli_fetch_array($junio1);
$junio = $row6['junio'];

$julio1 = mysqli_query($con, "SELECT COUNT(*) AS `julio` FROM `usuarios` WHERE create_date >= '20190701' and create_date <= '20190731'  ");
$row7 = mysqli_fetch_array($julio1);
$julio = $row7['julio'];

$julio1 = mysqli_query($con, "SELECT COUNT(*) AS `julio` FROM `usuarios` WHERE create_date >= '20190701' and create_date <= '20190731'  ");
$row7 = mysqli_fetch_array($julio1);
$julio = $row7['julio'];

$agosto1 = mysqli_query($con, "SELECT COUNT(*) AS `agosto` FROM `usuarios` WHERE create_date >= '20190801' and create_date <= '20190831'  ");
$row8 = mysqli_fetch_array($agosto1);
$agosto = $row8['agosto'];

$septiembre1 = mysqli_query($con, "SELECT COUNT(*) AS `septiembre` FROM `usuarios` WHERE create_date >= '20190901' and create_date <= '20190931'  ");
$row9 = mysqli_fetch_array($septiembre1);
$septiembre = $row9['septiembre'];

$octubre1 = mysqli_query($con, "SELECT COUNT(*) AS `octubre` FROM `usuarios` WHERE create_date >= '20191001' and create_date <= '20191031'  ");
$row10 = mysqli_fetch_array($octubre1);
$octubre = $row10['octubre'];

$noviembre1 = mysqli_query($con, "SELECT COUNT(*) AS `noviembre` FROM `usuarios` WHERE create_date >= '20191101' and create_date <= '20191131'  ");
$row11 = mysqli_fetch_array($noviembre1);
$noviembre = $row11['noviembre'];

$diciembre1 = mysqli_query($con, "SELECT COUNT(*) AS `diciembre` FROM `usuarios` WHERE create_date >= '20191201' and create_date <= '20191231'  ");
$row12 = mysqli_fetch_array($diciembre1);
$diciembre = $row12['diciembre'];

?>
<!--- GRAFICO LINIAL POR MES --->
<style media="screen">
  #myfirstchart path{
    stroke:#26b99a;
  }
  #myfirstchart circle{
    fill:#26b99a;
    stroke:white;
  }
  #myfirstchart {
    -webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
  box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
  }

</style>
        <script>

  var data = [
      { y: '2019-01', a: <?php echo $enero; ?>, b: 1},
      { y: '2019-02', a: <?php echo $febrero; ?>,  b: 5},
      { y: '2019-03', a: <?php echo $marzo; ?>,  b: 2},
      { y: '2019-04', a: <?php echo $abril; ?>,  b: 1},
      { y: '2019-05', a: <?php echo $mayo; ?>,  b: 3},
      { y: '2019-06', a: <?php echo $junio; ?>,  b: 4},
      { y: '2019-07', a: <?php echo $julio; ?>, b: 3},
      { y: '2019-08', a: <?php echo $agosto; ?>, b: 5},
      { y: '2019-09', a: <?php echo $septiembre; ?>, b: 2},
      { y: '2019-10', a: <?php echo $octubre; ?>, b: 1},
      { y: '2019-11', a: <?php echo $noviembre; ?>, b: 4},
      { y: '2019-12', a: <?php echo $diciembre; ?>, b: 6}

    ],
    config = {
      data: data,
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Usuarios Registrados', 'Prestamos al mes'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      barShape: 'soft',
      behaveLikeLine: true,
      resize: true,
      parseTime:true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['gray','red']
  };
config.element = 'myfirstchart';
Morris.Line(config);
config.stacked = true;


        </script>
