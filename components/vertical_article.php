<div class="card">
	<div class="row no-gutters h-100">
		<div class="col-12 overflow-hidden">
			<img class="card-img-top" src="<?php echo $img; ?> " />
		</div>
		<div class="col-12">
			<div class="card-body d-flex flex-column justify-content-between h-100">
				<h5 class="card-title"><?php echo random_name().", ".rand(1,7)." años"; ?></h5>
				<p class="card-text"><?php echo random_text(125); ?>.</p>
				<a href="#" class="btn btn-danger">See Profile</a>
			</div>
		</div>
	</div>
</div>