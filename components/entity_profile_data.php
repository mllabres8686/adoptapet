<?php
	$edit = false;
	
	$directory = "./img/mini_samples_crop";
	$images = glob($directory . "/*.jpg");
	$img = $images[array_rand($images)];
	
	
?>

<div class="jumbotron jumbotron-fluid" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img(11).jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	<div class="container ">
		<div class="row d-flex flex-row px-md-4">
			<img src="./img/web/male_profile_image.png" class="col- mx-2 " alt="Cinque Terre" width="120">
			
		</div>
	</div>
</div>

<div>
	<div class="row px-3">
		<div class="col-12 col-md-8">
			<div class="row mx-0  py-0 mb-2">
				<span class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">Nombre:</span>
				<span class="col-12 col-sm-9 my-1 bg-danger text-white" id="nombre_entidad">Asociación Mascotera de Sant Andreu</span>
				
				<span class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">Horario:</span>
				<span class="col-12 col-sm-9 my-1 bg-danger text-white" id="horario">Lunes a viernes de 08:00 a 17:00</span>
				
				<span class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">Contacto:</span>
				<span class="col-12 col-sm-9 my-1 bg-danger text-white" id="contacto_entidad" >656343467, contacto@asmassanan.com</span>
				
				<span class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">Redes sociales:</span>
				<span class="col-12 col-sm-9 my-1 bg-danger text-white" id="redes">Springer Spaniel</span>
				
				<span class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">Dirección:</span>
				<span class="col-12 col-sm-9 my-1 bg-danger text-white" id="direccion_entidad">C/ Formentor, 123, Barcelona 08030</span>
			</div>
		</div>
		
		<div class="col-12 col-md-4 bg-dark text-light" style="min-height:10em;">
			MAPA GOOGLE
		</div>
		
		<div class="col-12 py-4 my-4 bg-light text-dark">
			<div class="row  mx-0">
				<p><?php echo random_text(600); ?></p>
			</div>
		</div>
	</div>
</div>