<a href="#" class="text-dark nounderline">
<div class="card mb-3">
	<div class="row no-gutters h-100">
		<div class="col-12 col-lg-5 d-flex overflow-hidden" style="margin:auto;">
			<img class="card-img-top" src="<?php echo $img; ?> " />
		</div>
		<div class="col-12 col-lg-7">
			<div class="card-body d-flex flex-column justify-content-between h-100">
				<h5 class="card-title"><?php echo random_name().", ".rand(1,7)." años"; ?></h5>
				<p class="card-text"><?php echo random_text(125); ?>.</p>
				<p class="card-text bg-danger "><small class="text-white py-1 px-3">Last updated 3 mins ago</small></p>
			</div>
		</div>
	</div>
</div>
</a>