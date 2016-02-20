
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
		<div class="ed-item base-100 tablet-50 web-25 product__item">
			<img class="product__item__img" src="http://lorempixel.com/250/160/transport">
			<h3>Producto 1</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, temporibus. Veritatis maiores blanditiis rem ut delectus? Nostrum, itaque sit at? Perferendis consectetur numquam voluptates, consequatur, eligendi magni facere quae corporis.
			</p>
		</div>

		<div class="ed-item base-100 tablet-50 web-25 product__item">
			<img src="http://lorempixel.com/250/160/sports">
			<h3>Producto 2</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati autem dignissimos consectetur, veritatis reiciendis iusto assumenda commodi est laboriosam odio voluptatem! Inventore nemo voluptate minus, unde laudantium sint voluptatibus sequi.
			</p>
		</div>

		<div class="ed-item base-100 tablet-50 web-25 product__item">
			<img src="http://lorempixel.com/250/160/food">
			<h3>Producto 3</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati inventore provident, quia atque, soluta optio, doloribus reiciendis amet architecto earum accusantium fuga vel cum omnis temporibus mollitia consequuntur animi vitae.
			</p>
		</div>

		<div class="ed-item base-100 tablet-50 web-25 product__item">
			<img src="http://lorempixel.com/250/160/city">
			<h3>Producto 4</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, dignissimos hic amet cupiditate impedit quia in praesentium, nostrum voluptates magni esse officiis recusandae qui eos asperiores, aliquam explicabo voluptatum. Totam!
			</p>
		</div>
	</div>
</section>


