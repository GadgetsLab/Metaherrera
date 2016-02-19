<label for="nombre">Nombre:</label>
<input type="text" name="nombre" value="<?php if(isset($service->id)){ echo $service->nombre;} ?>" required>
<label for="descripcion">Descripcion</label>
<textarea name="descripcion" class="editor" cols="30" rows="10" required><?php if(isset($service->id)){ echo $service->descripcion;} ?></textarea>