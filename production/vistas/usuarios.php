
<link href="css/usuarios.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>SmartFinances</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Buscar</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>USUARIOS</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap tablas" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>Nombre(s)</th>
                            <th>Apellidos(s)</th>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>Fecha de registro</th>
                            <th>Ultimo Login</th>
                            <th>Identificacion</th>
                            <th style="text-align: center;">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
  global $con;
  $userVal = $_SESSION['user'];
  $sqlU = "SELECT * FROM usuarios where usuario = '$userVal'";
    $resultU = $con->query($sqlU);
  while($rowU = $resultU->fetch_assoc()) { 

    $userVal = $rowU['tipo'];

  }


                          global $con;
                              $sql = "SELECT * FROM usuarios";
                                $result = $con->query($sql);
                              while($row = $result->fetch_assoc()) {

                                echo '    <tr id="'.$row['id'].'">
                                <td data-target="nombre">'.$row['nombre'].'</td>
                                <td data-target="apellido">'.$row['apellido'].'</td>
                                <td data-target="usuario">'.$row['usuario'].'</td>
                                <td data-target="email">'.$row['email'].'</td>
                                <td>'.$row['create_date'].'</td>
                                <td>2011/04/25</td>
';                              if($row['identificacion'] != ""){
  echo '
  <td>'.$row['identificacion'].'</td>';
                                }else{
                                 echo' <td>No disponible</td>';
                                } 
    if($userVal==1){
      echo'                               <td style="text-align: center;">
      <div class="btn-group btn-group-sm" role="group" aria-label="...">
      <a width="100px" href="?ruta=perfil-usuario&idUser='.$row['id'].'"  class="btn btn-primary">Ver mas</a>
      <a href="#" data-role="update" data-id="'.$row['id'].'" data-toggle="modal" data-target="#modalEditarUsuario" class="btn btn-warning btnEditarUsuario" >Editar</a>
      <a data-role="delete" data-id="'.$row['id'].'" data-toggle="modal" data-target="#modalEliminarUsuario" class="btn btn-danger">Eliminar</a>
      </div>
                                      </td>
                                      </tr>';
    }else{
      echo'                               <td style="text-align: center;">
      <div class="btn-group btn-group-sm" role="group" aria-label="...">
      <a width="100px" href="?ruta=perfil-usuario&idUser='.$row['id'].'"  class="btn btn-primary">Ver mas</a>
      </div>
                                      </td>
                                      </tr>';
    }                                                        

                              }
                          ?>
                        </tbody>
                      </table>




    <!--======================================= 
                MODAL EDITAR USUSARIO
    =========================================-->
    <div class="modal fade" id="modalEditarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1><i class="fa fa-bar-chart-o"></i> Editar Usuarios</h1>
                </div>
                <div class="modal-body"> 
    <div class="row">
		<form role="form" class="col-md-12 go-right">
			<h2>Form To Right</h2>
            <p>To see how it works, you clink in a input field.</p>
			<div class="form-group">
			<input  name="nombre" id="editarNombre" type="text" class="form-control" required>
			<label for="name">Nombre</label>
		</div>
		<div class="form-group">
			<input  name="usuario" id="editarUsuario" type="text" class="form-control" required>
			<label for="phone">Usuario</label>
		</div>
		<div class="form-group">
			<input name="apellido" id="editarApellido" class="form-control" required>
			<label for="message">Apellido</label>
		</div>
    <div class="form-group">
			<input  name="email" id="editarEmail" class="form-control" required>
			<label for="message">Correo</label>
		</div>
		</form>
        <p class="bg-success" style="padding:10px;margin-top:20px;clear:both"><small><a href="#" target="_blank">Smart</a> Finances</small></p>
	</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secundary pull-right" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal -->
<script> 
$(document).ready(function(){
$(document).on('click','a[data-role=update]', function(){
  var id = $(this).data('id');
  var nombre = $('#'+id).children('td[data-target=nombre]').text();
  var apellido = $('#'+id).children('td[data-target=apellido]').text();
  var email = $('#'+id).children('td[data-target=email]').text();
  var usuario = $('#'+id).children('td[data-target=usuario]').text();

  $('#editarNombre').val(nombre);
  $('#editarUsuario').val(usuario);
  $('#editarEmail').val(email);
  $('#editarApellido').val(apellido);
  $('#modalEditarUsuario').modal('toogle');

})
});
</script>
   <!--======================================= 
                MODAL ELIMINAR USUSARIO
    =========================================-->
    <div class="modal fade" id="modalEliminarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1 align="center"><i class="fa fa-trash"></i> Eliminar Usuarios</h1>
                </div>
                <div class="modal-body">
   <h3 align="center">Seguro que desea eliminar el siguiente usuario?</h3>
   <p align="center" id="editarIdM"></p>
   <form method="post" action="controladores/controlador-usuario.php" style="text-align: center;">
   <input type="hidden" name="tipo_accion" value="elimininar-usuario">
   <input type="hidden" name="deleteUser" id="editarId" >
   <input type="hidden" name="nombre" id="nombreId" >
   <input type="hidden" name="usuario" id="<?php echo $_SESSION['user']; ?>" >
   <input type="submit" class="btn btn-danger" value="ELIMINAR">
  </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secundary pull-right" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal -->
    <script> 
$(document).ready(function(){
$(document).on('click','a[data-role=delete]', function(){
  var id = $(this).data('id');

  $('#editarId').val(id);
  var usuario = $('#'+id).children('td[data-target=usuario]').text();
  $("#editarIdM").text(usuario);
  $("#nombreId").val(usuario);
  $('#modalEliminarUsuario').modal('toogle');
   
})
});
</script>

  

          </div>
      </div>
  </div>
</div>
<script> 
$(document).ready(function()
      {
        var navItems = $('.admin-menu li > a');
        var navListItems = $('.admin-menu li');
        var allWells = $('.admin-content');
        var allWellsExceptFirst = $('.admin-content:not(:first)');
        allWellsExceptFirst.hide();
        navItems.click(function(e)
        {
            e.preventDefault();
            navListItems.removeClass('active');
            $(this).closest('li').addClass('active');
            allWells.hide();
            var target = $(this).attr('data-target-id');
            $('#' + target).show();
        });
        });
</script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secundary pull-right" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal -->
    <script> 
$(document).ready(function(){
$(document).on('click','a[data-role=ver]', function(){
  var id = $(this).data('id');

  $('#verUsuario').val(id);
  $('#modalVerUsuario').modal('toogle');

})
});
</script>













          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
