<?php include 'head.php';  ?> 

<div class="container">
	<div class="row">
		<?php include 'leftcol.php';  ?> 
		<div class="col-md-9" id="mainCol">
			<div class="panel panel-default">
				<div class="panel-body bg-success">
					<h3 class="no-margin text-success">Mis Grupos<button class="btn btn-success pull-right" data-toggle="modal" data-target="#grupo"><strong>Crear Grupo</strong></button></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<div class="caption">
							<h4>Grupo A 
								<div class="col-md-1 col-sm-1 col-xs-1 pull-right">
						          <li class="dropdown pull-right" style="list-style:none;">
						            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-down"></span></a>
						            <ul class="dropdown-menu">
						              <li><a href="#"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;&nbsp;Editar nombre</a></li>
									  <li><a href="#"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Eliminar grupo</a></li>
						              <li role="separator" class="divider block"></li>
						              <li><a href="#"><i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;&nbsp;Reportar un problema</a></li>
						            </ul>
						          </li>
						        </div> 
					        </h4>
							<br/>
							<p><a href="#" data-toggle="modal" data-target="#viewUsers"><i class="glyphicon glyphicon-user"></i>&nbsp;00 miembros</a></p>
							<p><a href="#" data-toggle="modal" data-target="#newUser"><i class="glyphicon glyphicon-plus"></i>&nbsp;Añadir miembros</a></p>
							<p><a href="group.php" ><i class="glyphicon glyphicon-ok"></i>&nbsp;Publicar</a></p>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<div class="caption">
							<h4>Grupo B 
								<div class="col-md-1 col-sm-1 col-xs-1 pull-right">
						          <li class="dropdown pull-right" style="list-style:none;">
						            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-down"></span></a>
						            <ul class="dropdown-menu">
						              <li><a href="#"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;&nbsp;Editar nombre</a></li>
									  <li><a href="#"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Eliminar grupo</a></li>
						              <li role="separator" class="divider block"></li>
						              <li><a href="#"><i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;&nbsp;Reportar un problema</a></li>
						            </ul>
						          </li>
						        </div> 
					        </h4>
							<br/>
							<p><a href="#" ><i class="glyphicon glyphicon-user"></i>&nbsp;00 miembros</a></p>
							<p><a href="#" ><i class="glyphicon glyphicon-plus"></i>&nbsp;Añadir miembros</a></p>
							<p><a href="#" ><i class="glyphicon glyphicon-ok"></i>&nbsp;Publicar</a></p>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<div class="caption">
							<h4>Grupo C 
								<div class="col-md-1 col-sm-1 col-xs-1 pull-right">
						          <li class="dropdown pull-right" style="list-style:none;">
						            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-down"></span></a>
						            <ul class="dropdown-menu">
						              <li><a href="#"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;&nbsp;Editar nombre</a></li>
									  <li><a href="#"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Eliminar grupo</a></li>
						              <li role="separator" class="divider block"></li>
						              <li><a href="#"><i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;&nbsp;Reportar un problema</a></li>
						            </ul>
						          </li>
						        </div> 
					        </h4>
							<br/>
							<p><a href="#" ><i class="glyphicon glyphicon-user"></i>&nbsp;00 miembros</a></p>
							<p><a href="#" ><i class="glyphicon glyphicon-plus"></i>&nbsp;Añadir miembros</a></p>
							<p><a href="#" ><i class="glyphicon glyphicon-ok"></i>&nbsp;Publicar</a></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>


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


<?php include 'footer.php';  ?> 