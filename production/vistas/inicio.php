<!-- page content -->



    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="row top_tiles" style="margin: 10px 0;">
          <div class="col-md-3 col-sm-3 col-xs-6 tile">
            <span>TASA</span>
            <h2><?php echo $tasa; ?>%</h2>
            <span class="sparkline_one" style="height: 160px;">
                  <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
              </span>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6 tile">
            <span>PESTAMOS TOTALES</span>
            <h2>100</h2>
            <span class="sparkline_one" style="height: 160px;">
                  <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
              </span>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6 tile">
            <span>PRESTAMOS PENDIENTES</span>
            <h2>80</h2>
            <span class="sparkline_two" style="height: 160px;">
                  <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
              </span>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6 tile">
            <span>USUARIOS</span>
            <h2>15</h2>
            <span class="sparkline_one" style="height: 160px;">
                  <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
              </span>
          </div>
        </div>
        <br />



<div class="x_content">
  <div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <strong>Importante!</strong> Por favor complete su informacion como cliente en el siguiente enlace. <strong ><a style="color:white;" href="?ruta=formulario-cliente">Ir al formulario</a></strong>
  </div>
</div>
<!---==================================================
              GRAFICO LINEAL CON PLUGINS MORRIS.JS
================================================= ------>


        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph x_panel">
              <div class="row x_title">
                <div class="col-md-6">
                  <h3>Actividades recientes <small>SmartActivities</small></h3>
                </div>
                <div class="col-md-6">
                  <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                  </div>
                </div>
              </div><br>
        <div id="myfirstchart" style="height:350px;color:white; width:100%;"></div>
        <br>
            </div>
          </div>
        </div>

        <!---==================================================
                      GRAFICO LINEAL CON VARIBLES PHP
        ================================================= ------>

      <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="x_panel fixed_height_320">
              <div class="x_title">
                <h2>Tablero info-prestamos <small>SmartActivities</small></h2>
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
                <h4>Prestamos</h4>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>Saldados</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">

                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>123k</span>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>Activos</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>53k</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>Inactivos</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>23k</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>Atrasados</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>3k</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>Sin aprovar</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>1k</span>
                  </div>
                  <div class="clearfix"></div>
                </div>

              </div>
            </div>
          </div>






























          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="x_panel fixed_height_320">
              <div class="x_title">
                <h2>Daily users <small>Sessions</small></h2>
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
              <table class="" style="width:100%">
                <tr>
                  <th style="width:37%;">
                    <p>Top 5</p>
                  </th>
                  <th>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                      <p class="">Device</p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                      <p class="">Progress</p>
                    </div>
                  </th>
                </tr>
                <tr>
                  <td>
                    <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                  </td>
                  <td>
                    <table class="tile_info">
                      <tr>
                        <td>
                          <p><i class="fa fa-square blue"></i>IOS </p>
                        </td>
                        <td>30%</td>
                      </tr>
                      <tr>
                        <td>
                          <p><i class="fa fa-square green"></i>Android </p>
                        </td>
                        <td>10%</td>
                      </tr>
                      <tr>
                        <td>
                          <p><i class="fa fa-square purple"></i>Blackberry </p>
                        </td>
                        <td>20%</td>
                      </tr>
                      <tr>
                        <td>
                          <p><i class="fa fa-square aero"></i>Symbian </p>
                        </td>
                        <td>15%</td>
                      </tr>
                      <tr>
                        <td>
                          <p><i class="fa fa-square red"></i>Others </p>
                        </td>
                        <td>30%</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="x_panel fixed_height_320">
              <div class="x_title">
                <h2>Profile Settings <small>Sessions</small></h2>
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
                <div class="dashboard-widget-content">
                  <ul class="quick-list">
                    <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a></li>
                    <li><i class="fa fa-thumbs-up"></i><a href="#">Favorites</a></li>
                    <li><i class="fa fa-calendar-o"></i><a href="#">Activities</a></li>
                    <li><i class="fa fa-cog"></i><a href="#">Settings</a></li>
                    <li><i class="fa fa-area-chart"></i><a href="#">Logout</a></li>
                  </ul>

                  <div class="sidebar-widget">
                    <h4>Profile Completion</h4>
                    <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
                    <div class="goal-wrapper">
                      <span id="gauge-text" class="gauge-value gauge-chart pull-left">0</span>
                      <span class="gauge-value pull-left">%</span>
                      <span id="goal-text" class="goal-value pull-right">100%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><br><br><br><br><br>
          </div>

<?php  include 'controladores/controlador-graficos.php'; ?>
<!-- /page content -->
