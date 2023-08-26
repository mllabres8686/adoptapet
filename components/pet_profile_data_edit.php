<form id="pet_info" name="pet_info" method="POST" action="#" class="hidden"></form>

<div class="row form-group mx-0 p-0 mb-2">
	<label for="nombre" class="col-3 col-md-3 col-lg-2 m-0">Nombre:</label>
	<input class="col-5 col-md-4 col-lg-5" id="nombre" name="nombre" value="" disabled/>
	
	<label for="edad" class="col-2 col-md-2 col-lg-2 m-0">Edad:</label>
	<input class="col-2 col-md-3 col-ld-3" id="edad" name="edad" type="number" value="" disabled/>
</div>

<div class="row form-group mx-0 p-0 mb-2">
	<label for="nacimiento" class="col-3 col-md-3 col-xl-2 m-0">Nacimiento:</label>
	<input class="col-5 col-md-5 col-xl-6" id="nacimiento" name="nacimiento" value="" disabled/>
	
	<label for="sexo" class="col-2 m-0">Sexo:</label>
	<input class="col-2" id="sexo" name="sexo" type="number" value="" disabled/>
</div>

<div class="row form-group mx-0 p-0 mb-2">
	<label for="raza" class="col-3 col-lg-2 m-0">Raza:</label>
	<input class="col-4 col-lg-5 col-xl-6" id="raza" name="raza" value="" disabled/>
	
	<label for="esteril" class="col-3 col-lg-3 col-xl-2 m-0">Esterilizad@:</label>
	<input class="col-2" id="esteril" name="esteril" value="" disabled/>
</div>

<div class="row form-group mx-0 p-0 mb-2">
	<label for="tamano" class="col-3 col-lg-2 m-0">Tamaño:</label>
	<input class="col-3 col-lg-4" id="tamano" name="tamano" value="grande" disabled/>
	
	<label for="peso" class="col-2 m-0">Peso:</label>
	<input class="col-4" id="peso" name="peso" type="number" value="23" disabled/>
</div>

<div class="row form-group mx-0 p-0 mb-2">
	<label for="cuidador" class="col-3 m-0">Cuidador/a:</label>
	<a href="#" class="col-5" >xxxxxxxx</a>
	
	<label for="peso" class="col-2 m-0">Peso:</label>
	<input class="col-2" id="peso" name="peso" type="number" value="" disabled/>
</div>

<div class="col-12">
			<div class="row form-group px-3 mx-0">
				<textarea form="pet_info" class="col-12 p-3 textarea"><?php echo random_text(600); ?></textarea>
				<p><?php echo random_text(600); ?></p>
			</div>
		</div>