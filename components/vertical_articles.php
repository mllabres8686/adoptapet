<?php
	$directory = "./img/mini_samples_crop";
	$images = glob($directory . "/*.jpg");
	$cont = 0;
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
		<div class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch my-2">
			<?php include("./components/vertical_article.php"); ?>
			<?php //include("./components/simple_article.php"); ?>
		</div>
		<?php 
		
		if($cont ==5){
			$cont = 0;
			?>
				</div>
			<?php
		} else {
			$cont++;
		}
	}
?>
		