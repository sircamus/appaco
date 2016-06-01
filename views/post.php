

<?php include 'head.php';  ?> 

<div class="container">
	<div class="row">
		<?php include 'leftcol.php';  ?>
		<div class="col-md-9" id="mainCol">
			<div class="panel panel-default">
				<div class="panel-body bg-success">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<h3 class="no-margin text-success">Foro</h3>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-8">
						<a href="newpost.php" class="btn btn-success pull-right"><strong>Nueva Entrada</strong></a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4" id="buscador">
						<div class="input-group pull-right">
							<input type="text" class="form-control" placeholder="Buscar...">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button"><i class="glyphicon glyphicon-search"></i></button>
							</span>
						</div>
					</div>					
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading wide">
					<div class="row">
						<div class="col-md-1 col-sm-1 col-xs-2">
							<img src="../assets/images/profile.png" alt="" class="img-comment">
						</div>
						<div class="col-md-1 col-sm-1 col-xs-1 pull-right">
							<li class="dropdown pull-right" style="list-style:none;">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-down post-title"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Eliminar</a></li>
									<li role="separator" class="divider block"></li>
									<li><a href="#"><i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;&nbsp;Reportar un problema</a></li>
								</ul>
							</li>
						</div>

						<div class="col-md-10 col-sm-10 col-xs-8">
							<h4 class="no-margin post-title">Titulo de la Publicación</h4>
							<a href="profile.php" class="post-title">Nombre Completo</a> <small class="pull-right post-title">DD/MM/AAAA</small><br/>
						</div>

						<div class="clear">&nbsp;</div>

					</div>
				</div>

				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna lacus, tincidunt a vulputate eu, molestie vel est. Quisque molestie aliquet tellus, et suscipit leo interdum eget. Nunc at arcu in magna pellentesque gravida. Integer massa elit, luctus nec nisl et, gravida sollicitudin felis. Mauris imperdiet lobortis metus vitae congue. Phasellus non mi turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna lacus, tincidunt a vulputate eu, molestie vel est. Quisque molestie aliquet tellus, et suscipit leo interdum eget. Nunc at arcu in magna pellentesque gravida. Integer massa elit, luctus nec nisl et, gravida sollicitudin felis. Mauris imperdiet lobortis metus vitae congue. Phasellus non mi turpis. <br><br>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna lacus, tincidunt a vulputate eu, molestie vel est. Quisque molestie aliquet tellus, et suscipit leo interdum eget. Nunc at arcu in magna pellentesque gravida. Integer massa elit, luctus nec nisl et, gravida sollicitudin felis. Mauris imperdiet lobortis metus vitae congue. Phasellus non mi turpis.</p></div>

						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-footer">
						<div class="row">
							<div class="col-md-1 col-sm-1 col-xs-2">
								<img src="../assets/images/profile.png" alt="" class="img-comment">
							</div>
							<div class="col-md-1 col-sm-1 col-xs-1 pull-right">
								<li class="dropdown pull-right" style="list-style:none;">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Eliminar</a></li>
										<li role="separator" class="divider block"></li>
										<li><a href="#"><i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;&nbsp;Reportar un problema</a></li>
									</ul>
								</li>
							</div>
							<div class="col-md-10 col-sm-10 col-xs-8">
								<a href="profile.php">Nombre completo</a><br/>
								<p>el DD/MM/AAAA a las 00:00</p>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna lacus, tincidunt a vulputate eu, molestie vel est.  </div>
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
										<li><a href="#"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Eliminar</a></li>
										<li role="separator" class="divider block"></li>
										<li><a href="#"><i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;&nbsp;Reportar un problema</a></li>
									</ul>
								</li>
							</div>
							<div class="col-md-10 col-sm-10 col-xs-8">
								<a href="profile.php">Nombre completo</a><br/>
								<p>el DD/MM/AAAA a las 00:00</p>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">Phasellus non mi turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna lacus, tincidunt a vulputate eu, molestie vel est.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna lacus, tincidunt a vulputate eu, molestie vel est.  </div>
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
										<div class="col-lg-9 col-md-8 col-sm-9 col-xs-6" style="z-index:99;">
											<input type="text" class="form-control" placeholder="Escribe un comentario...">
										</div>
										<div class="col-md-1">
											<button type="submit" class="btn btn-primary">Comentar</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php';  ?> 

	<style>
		.wide {
			width:100%;
			height:100%;
			height:calc(100% - 1px);
			background-image:url('http://kkpictures.com/images/Portfolio/Mountains/Large/Ben%20Starav%20in%20Winter.jpg'); /******* POST IMAGE *******/
			background-size:cover;
			padding-top: 130px;
		}
	</style>