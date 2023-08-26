<?php
	$directory = "./img/mini_samples_crop";
	$images = glob($directory . "/*.jpg");
	$cont = 0;
	foreach($images as $img){
		if($cont == 0){
			?>
				<div class="row">
			<?php
		}
		?>
		<div class="col-12 col-sm-6 d-flex align-items-stretch">
		
			<?php 
				if($cont%2 != 0){
					include("./components/left_article.php"); 
				} else {
					include("./components/right_article.php"); 
				}
			?>
		</div>
		<?php 
		
		if($cont == 5){
			$cont = 0;
			?>
				</div>
			<?php
		} else {
			$cont++;
		}
	}
?>