
<div class="row">
    <div class="col s6">
        <h5>Visión</h5>
        <form id="Vision" action="admin/about" method="post" novalidate>
            <label for="title">Titulo</label>
            <input type="text" name="title" value="<?php echo $new->titulo_vision ?>"required>
            <label for="contenido">Contenido</label>
            <textarea name="contenido" required><?php  echo $new->vision ?></textarea>
            <input type="hidden" name="option" value="vision">
            <button class="btn enviar" type="submit">Actualizar</button>
        </form>
    </div>
    <div class="col s6">
        <h5>Misión</h5>
        <form id = "Mision" action="admin/about" method="post" novalidate>
            <label for="title">Titulo</label>
            <input type="text" name="title" value="<?php echo $new->titulo_mision ?>" required>
            <label for="contenido">Contenido</label>
            <textarea name="contenido" required><?php echo $new->mision ?></textarea>
            <input type="hidden" name="option" value="mision">
            <button class="btn enviar">Actualizar</button>
        </form>
    </div>
</div>
