<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../assets/images/favicon.ico">

  <title>Academic Consulting</title>

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/navbar-fixed-top.css" rel="stylesheet">
  <link href="../assets/css/sticky-footer.css" rel="stylesheet">
  <link href="../assets/css/custom.css" rel="stylesheet">
  <link href="../assets/css/customicon.css" rel="stylesheet">
  <link rel="stylesheet" href="../bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div id="navbar">
            <ul class="nav navbar-nav inline">
              <li class="inline"><a href="#" class="glyphicon glyphicon-nav glyphicon-home"></a></li>
              <li class="inline"><a href="#" class="glyphicon glyphicon-nav glyphicon-list"></a></li>
              <li class="inline"><a href="#" class="glyphicon glyphicon-nav glyphicon-bullhorn"></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right inline right">
              <li><a href="#"><img src="../assets/images/profile.png" class="profilepic" alt=""></a></li>
              <li><a href="#" class="txt-white" id="username" style="padding-left: 4px; padding-right:4px;">Username</a></li>
              <li class="dropdown" id="profileop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-down txt-white"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;&nbsp;Ver Perfil</a></li>
                  <li><a href="#"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;&nbsp;Editar Perfil</a></li>
                  <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i>&nbsp;&nbsp;&nbsp;Centro de Ayuda</a></li>
                  <li role="separator" class="divider block"></li>

                  <li><a href="../logout.php"><i class="glyphicon glyphicon-off red"></i>&nbsp;&nbsp;&nbsp;Salir</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>

      <div class="container">

        <div class="row">
          <div class="col-md-3" id="leftCol">
            <div class="nav nav-stacked" id="sidebar">
              <div class="panel panel-primary"> 
                <div class="panel-heading"> 
                  <h3 class="panel-title">Grupos</h3> 
                </div> 
                <div class="panel-body">
                 <ul class="group-list hmenu-padding no-padding">
                   <li><a href="#">Grupo A</a></li>
                   <li><a href="#">Grupo B</a></li>
                   <li class="new-btn center" style="padding-bottom:0px !important; padding-top:20px !important;"><a href="#" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>&nbsp; Nuevo grupo</a></li>
                 </ul> 
               </div> 
             </div>

             <div class="panel panel-primary"> 
              <div class="panel-heading"> 
                <h3 class="panel-title">Foro</h3> 
              </div> 
              <div class="panel-body"> 
                <ul class="group-list hmenu-padding no-padding">
                 <li><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp; <a href="#">Mis post</a></li>
                 <li><i class="glyphicon glyphicon-calendar"></i>&nbsp;&nbsp; <a href="#"> Recientes</a></li>
                 <li class="new-btn center" style="padding-bottom:0px !important; padding-top:20px !important;"><a href="#" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>&nbsp; Nueva entrada</a></li>
               </ul>  
             </div> 
           </div>
           <a href="#" class="btn btn-warning"><i class="glyphicon glyphicon-question-sign"></i>&nbsp; Centro de Ayuda </a>
         </div>
       </div>  

       <div class="col-md-7" id="mainCol">
        <div>

          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Grupo A 
                <a href=""><i class="customicon customicon-user-plus pull-right"></i></a>
                <a href=""><i class="customicon customicon-users-1 pull-right"></i></a>&nbsp;&nbsp;&nbsp;
                <a href=""><i class="customicon customicon-calendar pull-right"></i></a>&nbsp;&nbsp;&nbsp;                
              </h3>
              
            </div>
          </div>


          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#pub" aria-controls="pub" role="tab" data-toggle="tab">Publicación</a></li>
            <li role="presentation"><a href="#act" aria-controls="act" role="tab" data-toggle="tab">Actividad</a></li>
          </ul>


          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="pub">
              <div class="panel panel-default no-radius">
                <div class="panel-body"> 


                 <!-- ***** PUBLICACION ****** --> 


                 <form action="" enctype="multipart/form-data">
                  <div class="form-group">
                    <textarea class="form-control" rows="2" id="comentario" name="comentario" placeholder="Comienza a escribir..."></textarea>
                  </div>

                  <div class="form-group">
                    <div class="form-inline">
                      <div class="input-group">
                        <input type="file" class="form-control filestyle" id="filepub" name="filepub" data-buttonBefore="true" data-buttonText="&nbsp;Examinar..."  data-buttonName="btn-primary" data-iconName="glyphicon glyphicon-paperclip" accept=".pdf, .doc, .docx, .ppt, .pptx, .jpg, .jpeg, .gif, .png">
                      </div>
                      <button type="submit" class="btn btn-primary pull-right">Publicar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="act">
            <div class="panel panel-default no-radius">
              <div class="panel-body"> 



                <!-- ***** ACTIVIDAD ****** --> 


                <form action="" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-9">
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
                          <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título de la Actividad">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                       <div class="input-group">
                        <input type="text" class="form-control" placeholder="Valor" id="valor" name="valor" maxlength="3">
                        <span class="input-group-addon"><strong>%</strong></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <textarea class="form-control" rows="2" id="instrucciones" name="instrucciones" placeholder="Instrucciones..."></textarea>
                </div>

                <div class="row">

                  <div class="col-md-5">
                    <div class="form-group">
                      <div class='input-group date' id='datetimepicker1'>
                       <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                      <input type='text' class="form-control" id="fechalim" name="fechalim" placeholder="Fecha límite" />
                    </div>
                  </div>
                </div>

                <div class="col-md-7">
                  <div class="form-group">
                    <select class="form-control" id="periodo" name="periodo">
                      <option>Periodo 1</option>
                      <option>Periodo 2</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-inline">
                  <div class="input-group">
                    <input type="file" class="form-control filestyle" id="fileact" name="fileact" data-buttonBefore="true" data-buttonText="&nbsp;Examinar..."  data-buttonName="btn-primary" data-iconName="glyphicon glyphicon-paperclip" accept=".pdf, .doc, .docx, .ppt, .pptx, .jpg, .jpeg, .gif, .png">
                  </div>
                  <button type="submit" class="btn btn-primary pull-right">Publicar</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** EJEMPLO DE ACTIVIDAD ****** --> 


  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-2">
          <img src="../assets/images/profile.png" alt="" class="img-comment">
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1 pull-right">
          <li class="dropdown pull-right" style="list-style:none;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-down"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="glyphicon glyphicon-remove"></i>&nbsp;&nbsp;&nbsp;Eliminar</a></li>
              <li role="separator" class="divider block"></li>
              <li><a href="#"><i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;&nbsp;Reportar un problema</a></li>
            </ul>
          </li>
        </div>  
        <div class="col-md-10 col-sm-10 col-xs-8">
          <a href="profile.php">Nombre</a> en <a href="group.php">Grupo B</a><br/>
          <p>el DD/MM/AAAA a las 00:00</p>
        </div>
        <div class="col-md-11 col-sm-8 col-xs-10">
          <a href="profile.php">Título de la Actividad </a>
          <p>Fecha límite: DD/MM/AAAA a las 00:00 &nbsp;|&nbsp; Valor: 00%</p>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna lacus, tincidunt a vulputate eu, molestie vel est. Quisque molestie aliquet tellus, et suscipit leo interdum eget. Nunc at arcu in magna pellentesque gravida.<p/></div>



        <div class="col-md-12 col-sm-12 col-xs-12"><i class="glyphicon glyphicon-r glyphicon-paperclip"></i>&nbsp;<a href="#"> Descargar archivo</a><p/></div>
        <div class="col-md-12 col-sm-12 col-xs-12"><button class="btn btn-primary">Responder</button></div>
      </div>
    </div>
  </div>


  <!-- ***** EJEMPLO DE PUBLICACIÓN ****** --> 



  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-2">
          <img src="../assets/images/profile.png" alt="" class="img-comment">
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1 pull-right">
          <li class="dropdown pull-right" style="list-style:none;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-down"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="glyphicon glyphicon-remove"></i>&nbsp;&nbsp;&nbsp;Eliminar</a></li>
              <li role="separator" class="divider block"></li>
              <li><a href="#"><i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;&nbsp;Reportar un problema</a></li>
            </ul>
          </li>
        </div>
        <div class="col-md-10 col-sm-10 col-xs-8">
          <a href="profile.php">Nombre</a> en <a href="group.php">Grupo A</a><br/>
          <p>el DD/MM/AAAA a las 00:00</p>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna lacus, tincidunt a vulputate eu, molestie vel est. Quisque molestie aliquet tellus, et suscipit leo interdum eget. Nunc at arcu in magna pellentesque gravida. Integer massa elit, luctus nec nisl et, gravida sollicitudin felis. Mauris imperdiet lobortis metus vitae congue. Phasellus non mi turpis.</div><br/>

        <div class="clear">&nbsp;</div>

        <div class="col-md-12 col-sm-12 col-xs-12"><i class="glyphicon glyphicon-r glyphicon-paperclip"></i>&nbsp;<a href="#"> Descargar archivo</a></div>  
      </div>
    </div>
    <div class="panel-footer">
      <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-2">
          <img src="../assets/images/profile.png" alt="" class="img-comment">
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1 pull-right">
          <li class="dropdown pull-right" style="list-style:none;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-down"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="glyphicon glyphicon-remove"></i>&nbsp;&nbsp;&nbsp;Eliminar</a></li>
              <li role="separator" class="divider block"></li>
              <li><a href="#"><i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;&nbsp;Reportar un problema</a></li>
            </ul>
          </li>
        </div>
        <div class="col-md-10 col-sm-10 col-xs-8">
          <a href="profile.php">Nombre</a><br/>
          <p>el DD/MM/AAAA a las 00:00</p>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna lacus, tincidunt a vulputate eu, molestie vel est.  </div>
      </div>
    </div>

    <div class="panel-footer">
      <form action="">
        <div class="row">
          <div class="col-md-1 col-sm-1 col-xs-2">
            <img src="../assets/images/profile.png" alt="" class="img-comment">
          </div>

          <div class="row">
            <div class="form-group">
              <div class="col-lg-8 col-md-8 col-sm-9 col-xs-6">
                <input type="text" class="form-control" placeholder="Escribe un comentario...">
              </div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Comentar</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div> 


</div> <!-- /row -->
</div> <!-- /container -->



<footer class="footer">
  <div class="container">
    <ul class="text-muted center footer-menu">
      <li><span>Academic Consulting ©2016</span></li>
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Contáctanos</a></li>
      <li><a href="#">Soporte</a></li>
      <li><a href="#">Centro de Ayuda</a></li>
      <li><a href="#">Planes</a></li>
      <li><a href="#">Salir</a></li>
    </ul>
  </div>
</footer>


<script src="../assets/js/jquery-1.12.4.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/navfix.js"></script>
<script src="../assets/js/bootstrap-filestyle.min.js"> </script>
<script src="../assets/js/collapse.js"> </script>
<script src="../assets/js/transition.js"> </script>
<script type="text/javascript" src="../bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript" src="../bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
  $(function () {
    $('#datetimepicker1').datetimepicker();
  });
</script>
</body>
</html>