<div class="row">
    <div class="col s6">
        <h5>Visión</h5>
        <form id="Vision" action="admin/about" method="post" novalidate>
            <label for="title">Titulo</label>
            <input type="text" name="title" required>
            <label for="contenido">Contenido</label>
            <textarea name="contenido" class="editor" cols="30" rows="10" required></textarea>
            <input type="hidden" name="option" value="vision">
            <button class="btn" type="submit">Actualizar</button>
        </form>
    </div>
    <div class="col s6">
        <h5>Misión</h5>
        <form id = "Mision" action="admin/about" method="post" novalidate>
            <label for="title">Titulo</label>
            <input type="text" name="title" required>
            <label for="contenido">Contenido</label>
            <textarea name="contenido" class="editor" cols="30" rows="10" required></textarea>
            <input type="hidden" name="option" value="mision">
            <button class="btn">Actualizar</button>
        </form>
    </div>
</div>