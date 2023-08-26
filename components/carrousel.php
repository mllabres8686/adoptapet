
		<!-- CARRUSEL DE BANNERS DE ENTIDADES -->
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
				<li data-target="#demo" data-slide-to="4"></li>
				<li data-target="#demo" data-slide-to="5"></li>
			</ul>
			
			<div class="carousel-inner">
			<?php 
				$directory = "./img/banners";
				$images = glob($directory . "/*.jpg");
				$cont = 0;
				
				foreach($images as $img){
			?>
			
				<div class="carousel-item <?php echo($cont ==0)?"active":""; ?>">
					<a href="#" class="text-dark nounderline">
						<div class ="banner-img-top" style="background-image:url('<?php echo $img; ?> ');"></div>
						<div class="carousel-caption">
							<h3>Los Angeles</h3>
							<p>We had such a great time in LA!</p>
						</div>
					<a href="#" class="text-dark nounderline">
				</div>
				
			<?php
				$cont ++;
				}
			?>
			
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		</div>