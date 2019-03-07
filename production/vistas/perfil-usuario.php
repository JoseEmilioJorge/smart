

<?php 

if(isset($_GET['idUser'])){
$idUser = $_GET['idUser'];
}


?>


<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Perfil de Usuario</h3>
              </div>
<?php




global $con;
$sql = "SELECT * FROM usuarios where id = '$idUser'";
  $result = $con->query($sql);
while($row = $result->fetch_assoc()) {



    echo '
    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
        </div>
      </div>
    </div>
  </div>
  
  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Reporte de usuario <small>Reporte de actividades</small></h2>
         
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
            <div class="profile_img">
              <div id="crop-avatar">
                <!-- Current avatar -->';


                if($row['foto'] != 1){
                  echo'<img class="img-responsive avatar-view" src="images/user.png" alt="Avatar" title="Change the avatar" style="width: 250px!important;height: 250px!important;">';
                }else{
                echo'<img class="img-responsive avatar-view" src="images/users/'.$row['usuario'].'.jpg" alt="Avatar" title="Change the avatar" style="width: 250px!important;height: 250px!important;">';              
                }
                
                echo '</div>
            </div>
            <h3>'.$row['nombre'].' '.$row['apellido'].'</h3>';
/////////////////////////////Consulta para el campo Info-Users//////////////////////////////////////////
$sqlInfo = "SELECT * FROM cliente_info where id_cliente = '$idUser'";
  $resultInfo = $con->query($sqlInfo);
while($rowInfo = $resultInfo->fetch_assoc()) {

    echo '
    <ul class="list-unstyled user_data">


      <li><i class="fa fa-map-marker user-profile-icon"></i> '.$rowInfo['direccion'].'
      </li>

      <li>
        <i class="fa fa-phone user-profile-icon"></i> '.$rowInfo['tel'].'
      </li>

      <li class="m-top-xs">
        <i class="fa fa-mars-stroke user-profile-icon"></i>
        '.$rowInfo['genero'].'
      </li>
    </ul>';

}

/////////////////////////////Aqui se reflejaran los prestamos activos//////////////////////////////

            echo '
            <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
            <br />

            <!-- start skills -->
            <h4>Prestamo activo</h4>
            <ul class="list-unstyled user_data">
              <li>
                <p>Prestamo personal</p>
                <div class="progress progress_sm">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                </div>
              </li>
            </ul>
            <!-- end of skills -->
            ';
}
?>













































                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6 center-block">
                          <h2 align="center">Reporte de actividades de usuario</h2>
                        </div>
                      </div>
                      <!-- start of user-activity-graph -->
                      <style>
                      <style media="screen">
  #bar-example rect{
    stroke:#26b99a;
  }
  #bar-example rect{
    fill:#26b99a;
    stroke:white;
  }
                      </style>
                      <div id="bar-example" style="width:100%; height:280px;"></div>

                        <script>
                        Morris.Bar({
  element: 'bar-example',
  data: [
    { y: '2019-01', a: 45},
      { y: '2019-02', a: 45},
      { y: '2019-03', a: 34},
      { y: '2019-04', a: 23},
      { y: '2019-05', a: 78},
      { y: '2019-06', a: 45},
      { y: '2019-07', a: 87},
      { y: '2019-08', a: 32},
      { y: '2019-09', a: 34},
      { y: '2019-10', a: 12},
      { y: '2019-11', a: 67},
      { y: '2019-12', a: 89}
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['Info-Pago: A']
});
                        </script>

                      <!-- end of user-activity-graph -->

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Actividades recientes</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Historial de Prestamos</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Valoración</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <ul class="messages">
                              <li>
                                <img src="images/img.jpg" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-info">24</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Desmond Davison</h4>
                                  <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br />
                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                  </p>
                                </div>
                              </li>
                              <li>
                                <img src="images/img.jpg" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-error">21</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Brian Michaels</h4>
                                  <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br />
                                  <p class="url">
                                    <span class="fs1" aria-hidden="true" data-icon=""></span>
                                    <a href="#" data-original-title="">Download</a>
                                  </p>
                                </div>
                              </li>
                              <li>
                                <img src="images/img.jpg" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-info">24</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Desmond Davison</h4>
                                  <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br />
                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                  </p>
                                </div>
                              </li>
                              <li>
                                <img src="images/img.jpg" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-error">21</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Brian Michaels</h4>
                                  <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br />
                                  <p class="url">
                                    <span class="fs1" aria-hidden="true" data-icon=""></span>
                                    <a href="#" data-original-title="">Download</a>
                                  </p>
                                </div>
                              </li>

                            </ul>
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Project Name</th>
                                  <th>Client Company</th>
                                  <th class="hidden-phone">Hours Spent</th>
                                  <th>Contribution</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>New Company Takeover Review</td>
                                  <td>Deveint Inc</td>
                                  <td class="hidden-phone">18</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>New Partner Contracts Consultanci</td>
                                  <td>Deveint Inc</td>
                                  <td class="hidden-phone">13</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Partners and Inverstors report</td>
                                  <td>Deveint Inc</td>
                                  <td class="hidden-phone">30</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>New Company Takeover Review</td>
                                  <td>Deveint Inc</td>
                                  <td class="hidden-phone">28</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
           <style>div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}</style>                 

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<div class="stars">
  <form action="">
    <input class="star star-5" id="star-5" type="radio" name="star" disabled/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" checked="checked" name="star" disabled/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star" disabled/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star" disabled/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star" disabled/>
    <label class="star star-1" for="star-1"></label>
  </form>
</div>

                          
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

























































