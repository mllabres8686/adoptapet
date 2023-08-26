
<header class="row mt-5">
<h1 class="col-12 text-center text-danger">Galeria de Firulais</h1>
</header>
<div class="row mx-0">
	<div class="col-12 mt-4">
	<?php
		$directory = "./img/mini_samples_crop";
		$images = glob($directory . "/*.jpg");
		$cont = 0;
		$max_per_row = 7;
		
		foreach($images as $img){
			$rand_desc = random_text(125);
			
			$rand_name = random_name();
			if($cont == 0){
				$cont = 0;
				?>
					<div class="row">
				<?php
			}
			?>
			<div class="col-sm-12 col-md-6 col-lg-3 d-flex align-items-stretch my-2">
				<?php //include("./components/vertical_article.php"); ?>
				<?php include("./components/pet_profile_pic.php"); ?>
			</div>
			<?php 
			
			if($cont == $max_per_row){
				$cont = 0;
				?>
					</div>
				<?php
			} else {
				$cont++;
			}
		}
	?>
	</div>
</div>