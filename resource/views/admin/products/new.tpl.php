<div class="row">
    <div class="col s12">
        <h5>Crear producto</h5>
        <form action="newProduct" method="POST" enctype="multipart/form-data">
            <label for="">Nombre:</label>
            <input name="nombre" type="text">
            <label for="">Imagen:</label>
            <input name="imagen" type="file">
            <label for="">Descripcion</label>
            <textarea name="descripcion" class="editor" cols="30" rows="10"></textarea>
            <button class="btn">Guardar</button>
        </form>
    </div>
 </div>