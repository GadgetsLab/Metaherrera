
<div class="slider">
	<ul class="slides">
		<?php foreach($sliders as $slide ): ?>
			<li>
				<img src="<?php echo BASE_URL ?>resource/images/slide/<?php echo $slide->imagen ?>"> <!-- random image -->
				<div class="caption center-align">
					<h3><?php echo $slide->titulo ?></h3>
					<h5 class="light grey-text text-lighten-3"><?php echo $slide->subtitulo ?></h5>
				</div>
			</li>
		<?php endforeach ?>
	</ul>
</div>
<section id="Services" class="grey darken-4 text-white">
	<h2 class="centrar">Servicios</h2>
	<div class="ed-container">
		<?php foreach($services as $service): ?>
			<div class="ed-item base-100 tablet-1-3 service__item center-text">
				<img class="service__item__img redondeado" src="<?php echo BASE_URL ?>resource/images/services/<?php echo $service->imagen ?>">
				<h3 class="centrar"><?php echo $service->nombre ?></h3>
				<?php echo $service->descripcion ?>
			</div>
		<?php endforeach ?>
		<div class="clear"></div>
	</div>
</section>
<section id="We" class="white">
	<div class="opaco">
		<div class="ed-container">
			<h2 class="centrar ed-item base-100"><?php echo $about->titulo_nosotros ?></h2>
			<div class="ed-item base-100 tablet-70 centro">
				<p><?php echo $about->nosotros ?></p>
			</div>
		</div>
	</div>
</section>
<section id="Products" class="grey lighten-4">
	<h2 class="centrar">Productos</h2>
	<div class="ed-container center-text">
		<?php foreach($products as $product): ?>
			<div class="ed-item base-100 tablet-50 web-25 product__item">
				<img class="product__item__img" src="<?php echo BASE_URL ?>resource/images/products/<?php echo $product->imagen ?>">
				<h3><?php echo $product->nombre ?></h3>
				<?php echo $product->descripcion ?>
			</div>
		<?php endforeach ?>
	</div>
</section>


