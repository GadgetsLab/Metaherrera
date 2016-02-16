<section id="contact">
	<?php if($confirmer == true){
		?>
		<h1>Logrado</h1>
	<?php	
		} ?>
	<h2 class="centrar">Contactanos</h2>
	<div class="ed-container">	
		<div class="ed-item base-100 tablet-50 grey lighten-4">
			<form action="" method="POST">
				<i class="material-icons prefix">account_circle</i>
				<input type="text" name="nombre" placeholder="Nombre" required>
				<i class="material-icons prefix">email</i>
				<input type="text" name="correo" placeholder="Correo" required>
				<i class="material-icons prefix">label_outline</i>
				<input type="text" name="asunto" placeholder="Asunto">
				<i class="material-icons prefix">mode_edit</i>
          		<textarea name="mensaje" class="materialize-textarea" placeholder="Comentanos"></textarea>
          		<button>Enviar</button>
			</form>
		</div>
		<div class="ed-item base-100 tablet-50">
			Mapa
		</div>			
	</div>
</section>