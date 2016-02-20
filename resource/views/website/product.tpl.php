<section id="cat_Pro">
	<h2 class="text-center">Productos</h2>
	<div class="ed-container">
		<div class="ed-item tablet-20" id="Categories">
			<h4>Filtro por categorias:</h4>
			<ul>
				<?php foreach($categories as $catego):?>
				<li><a href="products/<?php echo $catego->id ?>"><?php echo $catego->nombre ?> <i class="tiny material-icons">trending_flat</i></a></li>
				<?php endforeach ?>
			</ul>
		</div>
		<div id="products" class="ed-item tablet-80">
			<div class="ed-container center-text">
				<?php foreach($products as $product): ?>
					<div class="ed-item base-100 tablet-50">
							<div class="card">
								<div class="card-image">
									<img src="<?php echo BASE_URL ?>resource/images/products/<?php echo $product->imagen ?>">
									<span class="card-title"><?php echo $product->nombre ?></span>
								</div>
								<div class="card-content">
									<?php echo $product->descripcion ?>
								</div>
								<div class="card-action">
									Categoria:
									<a href="#">
										<?php
										$category = new \App\Models\Categories();
										$category_name = $category->find($product->id_cat);
										echo $category_name->nombre;
										?>
									</a>
								</div>
							</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</section>
	

