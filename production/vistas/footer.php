<!-- gauge.js -->
<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../vendors/Flot/jquery.flot.js"></script>
<script src="../vendors/Flot/jquery.flot.pie.js"></script>
<script src="../vendors/Flot/jquery.flot.time.js"></script>
<script src="../vendors/Flot/jquery.flot.stack.js"></script>
<script src="../vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="../vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!---Alertas lindas --->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
<!-- SWEETALERT -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            SmartFinances - By <a href="https://colorlib.com">DeCode</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

<style media="screen">
.files input {
  outline: 2px dashed #92b0b3;

  -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
  transition: outline-offset .15s ease-in-out, background-color .15s linear;

  text-align: center !important;
  margin: 0;
  width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
  -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
  transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
}
.files{ position:relative}
.files:after {  pointer-events: none;
  position: absolute;
  top: 100px;
  left: 0;
  width: 50px;
  right: 0;
  height: 56px;
  content: "";
  background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
  display: block;
  margin: 0 auto;
  background-size: 100%;
  background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
  position: absolute;
  bottom: 10px;
  left: 0;  pointer-events: none;
  width: 100%;
  right: 0;
  height: 57px;
  content: " Arrastrar imagen. ";
  display: block;
  margin: 0 auto;
  color: #2ea591;
  font-weight: 600;
  text-transform: capitalize;
  text-align: center;
}
</style>
<!--=============MODALES CAMBIAR IMAGEN DE PERIL========
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="container">
      	<div class="row">

      	   <div class="col-md-6">
      	      <form action="controladores/controlador-imagen.php" method="POST" enctype="multipart/form-data"/>
                    <div class="form-group files color">
                      <label>Upload Your File </label>
                      <input type="file" class="form-control" name="archivo" id="archivo" type="file" accept="image/jpeg"/>
                    </div>
                    <button type="submit" name="subir"> Subir imagen </button>
                </form>
      	  </div>
      	</div>
      </div>

<!--
      <form action="controladores/controlador-imagen.php" method="POST" enctype="multipart/form-data"/>
      <input name="archivo" id="archivo" type="file" accept="image/jpeg"/>
      <input type="submit" name="subir" value="Subir imagen"/>
    </form>
    </div>
  </div>
</div>
<!--=============Cierre======== -->


<div class="modal fade bd-example-modal-lg" id="demo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">x</button>
            <h3>Actualizar foto de perfil!</h3>
          </div>
            <div class="modal-body">
              <div class="col-md-6">
                 <form action="controladores/controlador-imagen.php" method="POST" enctype="multipart/form-data"/>
                       <div class="form-group files color"><br><br>
                         <label></label>
                         <input type="file" class="form-control" name="archivo" id="archivo" type="file" accept="image/jpeg"/>
                       </div>
                       <button type="submit" name="subir"> Subir imagen </button>
                       <br><br>
                   </form>
             </div>
          </div><br><br><br>
            <div class="modal-footer">
            SmartFinances
          </div>
        </div>
    </div>
</div>




  </body>
</html>
