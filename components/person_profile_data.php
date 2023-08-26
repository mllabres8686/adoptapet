<?php
	$edit = false;
	
	$directory = "./img/mini_samples_crop";
	$images = glob($directory . "/*.jpg");
	$img = $images[array_rand($images)];
	
	
?>
<!--
https://mdbootstrap.com/img/Photos/Others/img%20%2848%29.jpg
https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img(20).jpg
https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img(11).jpg
https://mdbootstrap.com/img/Photos/Others/img%20%2832%29.jpg
https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20%2873%29.jpg
-->

<div class="jumbotron jumbotron-fluid" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img(11).jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	<div class="container ">
		<div class="row d-flex flex-row px-md-4">
			<img src="./img/web/male_profile_image.png" class="col- mx-2 rounded-circle" alt="Cinque Terre" width="120">
			<div class="col-12 col-sm-8">
				<h1 id="person_name" class="text-danger font-weight-bold">Mowglee_86</h1>
				<h6 id="person_ubication" class="text-danger font-weight-thin">Barcelona</h6>
				<span class="col-8 my-1 py-1 bg-danger text-white">Registrate para ver el contacto</span>
			</div>
		</div>
	</div>
</div>

<div>
	<div class="row px-3">
		<div class="col-12 py-5 bg-light text-dark">
			<div class="row mx-0">
				<p>
					<?php echo random_text(255); ?>
				</p>
			</div>
		</div>
	</div>
</div>