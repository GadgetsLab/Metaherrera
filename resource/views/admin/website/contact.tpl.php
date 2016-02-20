<div class="row">
    <div class="col s12">
        <h5>Contacto</h5>
        <form action="<?php echo BASE_PUBLIC ?>/admin/updateContact" method="post">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" value="<?php echo $contact->direccion ?>" required>
            <label for="telefono">Telefono:</label>
            <input type="number" name="telefono" value="<?php echo $contact->telefono ?>" required>
            <label for="correo">Correo:</label>
            <input type="email" name="correo" value="<?php echo $contact->correo ?>" required>
            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion" value="<?php echo $contact->descripcion ?>" required>
            <button class="btn">Actualizar</button>
        </form>
    </div
</div>