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
				<div class="panel-body">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h4 class="no-margin padding-tb"> <i class="glyphicon glyphicon-search"></i> &nbsp; Resultados de búsqueda</h4>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-sm-4 col-md-3 col-xs-6">
								<div class="thumbnail">
									<a href=""><img src="../assets/images/background.jpg" alt=""></a>
									<div class="caption">
										<h5><a href="#">Titulo del Post</a> <br> <small><a href="" class="txt-gray">Nombre Completo</a></small></h5>
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p><small class="pull-right txt-gray">DD/MM/AAAA</small></p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-4 col-md-3 col-xs-6">
								<div class="thumbnail">
									<a href=""><img src="../assets/images/background.jpg" alt=""></a>
									<div class="caption">
										<h5><a href="#">Titulo del Post</a> <br> <small><a href="" class="txt-gray">Nombre Completo</a></small></h5>
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p><small class="pull-right txt-gray">DD/MM/AAAA</small></p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-4 col-md-3 col-xs-6">
								<div class="thumbnail">
									<a href=""><img src="../assets/images/background.jpg" alt=""></a>
									<div class="caption">
										<h5><a href="#">Titulo del Post</a> <br> <small><a href="" class="txt-gray">Nombre Completo</a></small></h5>
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p><small class="pull-right txt-gray">DD/MM/AAAA</small></p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-4 col-md-3 col-xs-6">
								<div class="thumbnail">
									<a href=""><img src="../assets/images/background.jpg" alt=""></a>
									<div class="caption">
										<h5><a href="#">Titulo del Post</a> <br> <small><a href="" class="txt-gray">Nombre Completo</a></small></h5>
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p><small class="pull-right txt-gray">DD/MM/AAAA</small></p>
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
</div>

<?php include 'footer.php';  ?> 