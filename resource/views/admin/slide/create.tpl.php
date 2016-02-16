<h5>Nuevo Item del Slide</h5>
<form action="newslide" method="post" enctype="multipart/form-data">
    <?php include '_partial/_campos.tpl.php'; ?>
    <label for="imagen">Imagen</label>
    <input type="file" name="imagen" required>
    <button class="btn">Guardar</button>
</form>