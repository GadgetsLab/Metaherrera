<label for="">Nombre:</label>
<input name="nombre" type="text" value="<?php if(isset($product)){echo $product->nombre;} ?>">
<label for="">Categoria:</label>
<select name="id_cat" id="id_cat" class="browser-default">
    <?php foreach($categories as $category): ?>
        <option value="<?php echo $category->id ?>"><?php echo $category->nombre ?></option>
    <?php endforeach ?>
</select>
<label for="">Descripcion</label>
<textarea name="descripcion" class="editor" cols="30" rows="10"><?php if(isset($product)){echo $product->descripcion;} ?></textarea>