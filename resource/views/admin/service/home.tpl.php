<div class="row">
    <div class="col s12">
        <h5>Todos los Servicios</h5>
        <table class="striped white">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($services as $service): ?>
                <tr>
                    <td><?php echo $service->nombre ?></td>
                    <td><?php echo $service->descripcion ?></td>
                    <td> <img class="materialboxed" width="150" height="100" src="<?php echo BASE_URL ?>resource/images/services/<?php echo $service->imagen ?>" /></td>
                    <td><a class="btn-floating waves-effect waves-light blue" href="newservice/<?php echo $service->id ?>"><i class="material-icons">settings_input_component</i></a>
                        <a class="btn-floating waves-effect waves-light red" href="deleteservice/<?php echo $service->id ?>"><i class="material-icons">delete</i></a>
                    </td>                    
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
