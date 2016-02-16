<div class="row">
    <div class="col s12">
        <h5>¿Quienes somos?</h5>
        <form action="about" method="post" id="nostros" novalidate>
            <label for="title">Titulo</label>
            <input type="text" name="title" value="<?php echo $about->titulo_nosotros ?>" required>
            <label for="contenido">Contenido</label>
            <textarea name="contenido" class="editor" cols="30" rows="10" required><?php echo $about->nosotros ?></textarea>
            <input type="hidden" name="option" value="nosotros">
            <button class="btn" type="submit">Actualizar</button>
        </form>
    </div
</div>