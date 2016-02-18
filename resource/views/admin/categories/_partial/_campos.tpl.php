<label for="nombre">Titulo</label>
<input type="text" name="nombre" value="<?php if(isset($category)){ echo $category->nombre;} ?>">
<textarea name="descripcion" class="editor" placeholder="Descripcion"><?php if(isset($category)){ echo $category->descripcion;} ?></textarea>