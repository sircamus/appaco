<?php include 'head.php';  ?>

<<<<<<< HEAD
      <div class="container">
        <div class="row">

          <?php include 'leftcol.php';  ?>  

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
=======
<div class="container">
  <div class="row">

    <?php include 'leftcol.php';  ?>  

    <div class="col-md-9" id="mainCol">
      <div>

        <div class="panel panel-default">
          <div class="panel-body bg-success">
            <h3 class="no-margin text-success">Grupo A 
              <a href="#" data-toggle="modal" data-target="#newUser"><i class="glyphicon glyphicon-plus pull-right padding-sides"></i></a>
              <a href="#" data-toggle="modal" data-target="#viewUsers"><i class="glyphicon glyphicon-list-alt pull-right padding-sides"></i></a>
              <a href="#" data-toggle="modal" data-target="#period"><i class="glyphicon glyphicon-book pull-right padding-sides"></i></a>             
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

>>>>>>> master
        </div>
      </div>
    </div>
  </div>
<<<<<<< HEAD

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
=======
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
        <a href="profile.php">Nombre</a><br/>
        <p>el DD/MM/AAAA a las 00:00</p>
      </div>
      <div class="col-md-11 col-sm-8 col-xs-10">
        <a href="profile.php">Título de la Actividad </a>
        <p>Fecha límite: DD/MM/AAAA a las 00:00 &nbsp;|&nbsp; Valor: 00%</p>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna lacus, tincidunt a vulputate eu, molestie vel est. Quisque molestie aliquet tellus, et suscipit leo interdum eget. Nunc at arcu in magna pellentesque gravida.<p/></div>



      <div class="col-md-12 col-sm-12 col-xs-12"><i class="glyphicon glyphicon-r glyphicon-paperclip"></i>&nbsp;<a href="#"> Descargar archivo</a><p/></div>
      <div class="col-md-12 col-sm-12 col-xs-12"><button class="btn btn-success pull-right"><i class="glyphicon glyphicon-pencil"></i>&nbsp; Responder</button></div>
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
        <a href="profile.php">Nombre</a><br/>
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
>>>>>>> master
      <div class="row">
        <div class="col-md-1 col-sm-1 col-xs-2">
          <img src="../assets/images/profile.png" alt="" class="img-comment">
        </div>
<<<<<<< HEAD
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

<?php include 'footer.php';  ?>
=======

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


<!-- ***** NEW USER MODAL ****** -->

<div class="modal fade" id="newUser" tabindex="-1" role="dialog" aria-labelledby="Agregar">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="Agregar">Agregar alumnos al grupo</h4>
      </div>
      <div class="modal-body">
        <p>Actualmente estos alumnos <strong>no</strong> son miembros del grupo</p>
        <div class="table-responsive">
          <form action="">
            <table class="table table-striped">
              <tr>
                <th class="col-md-1 col-sm-1 col-xs-1"></th>
                <th class="col-md-11 col-sm-11 col-xs-11">Nombre</th>
              </tr>
              <tr>
                <td>
                  <div class="checkbox" style="margin:0px !important;">
                    <label>
                      <input type="checkbox" value="">
                    </label>
                  </div>
                </td>
                <td>Nombre completo del alumno</td>
              </tr>
            </table>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Agregar seleccionado(s)</button>
      </div>
    </div>
  </div>
</div>



<!-- ***** ACTUAL USERS MODAL ****** -->


<div class="modal fade" id="viewUsers" tabindex="-1" role="dialog" aria-labelledby="Miembros">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="Miembros">Miembros del Grupo</h4>
      </div>
      <div class="modal-body">
        <p>Alumnos miembros del grupo</p>
        <div class="table-responsive">
          <form action="">
            <table class="table table-striped">
              <tr>
                <th class="col-md-1 col-sm-1 col-xs-1"></th>
                <th class="col-md-11 col-sm-11 col-xs-11">Nombre</th>
              </tr>
              <tr>
                <td>
                  <div class="checkbox" style="margin:0px !important;">
                    <label>
                      <input type="checkbox" value="">
                    </label>
                  </div>
                </td>
                <td>Nombre completo del alumno</td>
              </tr>
            </table>
          </form>
        </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-danger">Quitar seleccionado(s)</button>
      </div>
    </div>
  </div>
</div>


<!-- ***** PERIOD MODAL ****** -->




<div class="modal fade" id="period" tabindex="-1" role="dialog" aria-labelledby="Periodo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="Periodo">Periodos</h4>
      </div>
      <div class="modal-body">
        <p>Porcentaje actual <strong>total</strong> de las Actividades en cada periodo</p>
        <label>Periodo 1</label>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100" style="width: 100%;">
            100%
          </div>
        </div>

        <label>Periodo 2</label>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width: 60%;">
            60%
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <form action="">
          <div class="row">
            <div class="form-group">
              <div class="col-md-10 col-sm-10 col-xs-9">
                <input type="text" class="form-control" id="periodo" name="periodo" placeholder="Nuevo periodo">
              </div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Crear</button>
              </div>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>



<?php include 'footer.php';  ?>


>>>>>>> master
