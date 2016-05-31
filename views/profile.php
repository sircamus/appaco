<?php include 'head.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-3 no-hidde" id="leftCol">
			<div class="thumbnail">
				<div class="fill" style="width:100%; height:200px;">
					<img src="../assets/images/profile.png" id="profilepic"> 		<!-- User's image -->
				</div>
			</div>
		</div>

		<div class="col-md-9" id="mainCol">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-md-4 col-sm-4 col-xs-4 pull-right">
						<li class="dropdown pull-right" style="list-style:none;">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <i class="glyphicon glyphicon-menu-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="glyphicon glyphicon-cog"></i>&nbsp;&nbsp;&nbsp;Editar Perfil</a></li>
								<li role="separator" class="divider block"></li>
								<li><a href="#"><i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;&nbsp;Reportar un problema</a></li>
							</ul>
						</li>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-8">
						<h4 class="text-primary no-margin">Nombre Completo</h4>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10">
						<h5 style="color:#aaa;">Acerca de Nombre</h5>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna lacus, tincidunt a vulputate eu, molestie vel est. Quisque molestie aliquet tellus, et suscipit leo interdum eget. Nunc at arcu in magna pellentesque gravida. Integer massa elit, luctus nec nisl et, gravida sollicitudin felis. Mauris imperdiet lobortis metus vitae congue.
						</p>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h4 class="text-primary no-margin padding-tb">Post en el Foro</h4>
			</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="row">
				<div class="col-sm-4 col-md-3 col-xs-6">
					<div class="thumbnail">
						<a href=""><img src="../assets/images/background.jpg" alt=""></a>
						<div class="caption">
							<h5><a href="">Thumbnail label</a> <br> <small>DD/MM/AAAA</small></h5>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-md-3 col-xs-6">
					<div class="thumbnail"> 
						<a href=""><img src="../assets/images/background.jpg" alt=""></a>
						<div class="caption">
							<h5><a href="">Thumbnail label</a> <br> <small>DD/MM/AAAA</small></h5>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-md-3 col-xs-6">
					<div class="thumbnail">
						<a href=""><img src="../assets/images/background.jpg" alt=""></a>
						<div class="caption">
							<h5><a href="">Thumbnail label</a> <br> <small>DD/MM/AAAA</small></h5>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-md-3 col-xs-6">
					<div class="thumbnail">
						<a href=""><img src="../assets/images/background.jpg" alt=""></a>
						<div class="caption">
							<h5><a href="">Thumbnail label</a> <br> <small>DD/MM/AAAA</small></h5>
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

<style scoped>
	@media (min-width: 768px) and (max-width: 991px) {
		div.fill{
			background: url(../assets/images/profile.png) no-repeat center center fixed;  /** User's image **/
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	}

	@media (max-width: 767px) {
		div.fill{
			background: url(../assets/images/profile.png) no-repeat center center fixed;  /** User's image **/
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	} 
</style>