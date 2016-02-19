<div class="row">
    <div class="col s12">
        <h5>Crear servicio</h5>
        <form action="newservice" method="POST" enctype="multipart/form-data" novalidate>
           <?php include '_partial/_campos.tpl.php'; ?>
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen">
            <button class="btn margin-top-20">Guardar</button>
        </form>
    </div>
 </div>