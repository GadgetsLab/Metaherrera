<div class="row">
    <div class="col s12">
        <h5>Todos las Categorias</h5>
        <table class="striped white">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($categories as $category): ?>
                <tr>
                    <td><?php echo $category->nombre ?></td>
                    <td><?php echo $category->descripcion ?></td>
                    <td><a class="btn-floating waves-effect waves-light blue" href="newcategory/<?php echo $category->id ?>"><i class="material-icons">settings_input_component</i></a>
                        <a class="btn-floating waves-effect waves-light red" href="deletecategory/<?php echo $category->id ?>"><i class="material-icons">delete</i></a>
                    </td>                    
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
