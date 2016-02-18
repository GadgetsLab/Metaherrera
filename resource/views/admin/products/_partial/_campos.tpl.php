<label for="">Nombre:</label>
<input name="nombre" type="text" value="<?php if(isset($product)){echo "$product->nombre";} ?>">
<label for="">Imagen:</label>
<label for="">Descripcion</label>
<textarea name="descripcion" class="editor" cols="30" rows="10"><?php if(isset($product)){echo "$product->";} ?></textarea>