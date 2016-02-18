<div class="row">
    <div class="col s12">
        <h5>Crear Productos</h5>
        <form action="newProduct" method="post" enctype="multipart/form-data">
            <?php include '_partial/_campos.tpl.php'; ?>
            <label for="">Imagen:</label>
            <input name="imagen" type="file" value="<?php if(isset($product)){echo "$product->imagen";} ?>">
            <button class="btn">Crear</button>
        </form>
    </div>
</div>