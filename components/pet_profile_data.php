<?php
	$edit = false;
	
	$directory = "./img/mini_samples_crop";
	$images = glob($directory . "/*.jpg");
	$img = $images[array_rand($images)];
	
	
?>

<div>
	<div class="row px-3">
		<div class="col-12 col-md-4">
			<?php include("./components/pet_profile_pic.php"); ?>
		</div>
		
		
		<div class="col-12 col-md-8">
			<div class="row mx-0  py-0 mb-2">
				<span for="nombre" class="col-3 my-1 px-2 text-danger font-weight-bold">Nombre:</span>
				<span class="col-9 my-1 bg-danger text-white" id="nombre">Firulais</span>
				
				<span for="edad" class="col-3 my-1 px-2 text-danger font-weight-bold">Edad:</span>
				<span class="col-3 my-1 bg-danger text-white" id="edad">4 años</span>
				
				<span for="sexo" class="col-3 my-1 px-2 text-danger font-weight-bold">Sexo:</span>
				<span class="col-3 my-1 bg-danger text-white">Macho</span>
				
				<span for="raza" class="col-2 my-1 px-2 text-danger font-weight-bold">Raza:</span>
				<span class="col-10 my-1 bg-danger text-white" id="raza">Springer Spaniel</span>
				
				<span for="nacimiento" class="col-4 my-1 px-2 text-danger font-weight-bold">Nacimiento:</span>
				<span class="col-8 my-1 bg-danger text-white" >03 Diciembre 2015</span>
				
				<span for="esteril" class="col-4 my-1 px-2 text-danger font-weight-bold">Esterilizad@:</span>
				<span class="col-8 my-1 bg-danger text-white" id="esteril">Si</span>
				
				<span for="tamano" class="col-3 my-1 px-2 text-danger font-weight-bold">Tamaño:</span>
				<span class="col-4 my-1 bg-danger text-white" id="tamano">Medio</span>
				
				<span for="peso" class="col-2 my-1 px-2 text-danger font-weight-bold">Peso:</span>
				<span class="col-3 my-1 bg-danger text-white" id="peso" >14 Kg</span>
				
				<span for="cuidador" class="col-4 my-1 px-2 text-danger font-weight-bold">Cuidador/a:</span>
				<a href="#" class="col-8 my-1 " >xxxxxxxx</a>
				
			</div>
		</div>
		<div class="col-12 pt-4 bg-light text-dark">
			<div class="row  mx-0">
				<p><?php echo random_text(600); ?></p>
			</div>
		</div>
	</div>
</div>