<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
	<a class="navbar-brand" href="#">
		<img src="./img/web/logo_trans_white.png" width="45" height="45"/>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="navbar-collapse collapse in" id="navbarTogglerDemo02">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="main.php">ADOPCIONES <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="pet.php">PET</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="profile.php">PROFILE</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="entity.php">ENTITY</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">LOGIN/LOGOUT</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">REGISTRO</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">PERFIL</a>
			</li>
		</ul>
		<!--FORMULARIO DE BUSQUEDA SOLO PARA MOVIL-->
		<form class="form-horizontal my-2 my-lg-0 d-lg-none px-3 py-2">
			<div class="form-group">
				<button class="btn btn-outline-danger my-2 my-sm-0" type="button" data-toggle="collapse" data-target="#specimenPopup">Especie</button>
				<button class="btn btn-outline-danger my-2 my-sm-0" type="button" data-toggle="collapse" data-target="#breedPopup">Raza</button>
			</div>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search" name="search">
				<div class="input-group-btn">
					<button class="btn btn-default" type="submit">
						<i class="fas fa-search"></i>
					</button>
				</div>
			  </div>
		</form>
	</div>
</nav>
		
		<!-- BREADCRUMBS -->
		<?php echo breadcrumbs(); ?>