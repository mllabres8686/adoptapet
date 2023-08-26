<?php 
	$formato = "vertical";
	
	if($formato == "horizontal"){
		$aside_bt = "col-md-4";
		$content_bt = "col-sm-12 col-md-8";
	} else if($formato == "vertical"){
		$aside_bt = "col-md-3";
		$content_bt = "col-sm-12 col-md-9";
	}
?>

<!-- CONTENIDOS -->
<div class="row mx-0">
	<div class="<?php echo $aside_bt; ?> mt-4 d-none d-md-block" style="background-color: #f8f9fa!important;">
		<?php include_once("./components/left_aside.php"); ?>
	</div>
	
	
	<div class="<?php echo $content_bt; ?> mt-4">
	
	<?php include_once("./components/search_form.php"); ?>
		<?php 
		if($formato == "horizontal"){
			include_once("./components/horizontal_articles.php");
		} else if($formato == "vertical"){
			include_once("./components/vertical_articles.php");
		}
		?>
	</div>
</div>
