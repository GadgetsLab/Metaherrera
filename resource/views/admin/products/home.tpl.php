<div class="row">
    <div class="col s12">
        <h5>Todos las Categorias</h5>
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
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?php echo $product->nombre ?></td>
                    <td><?php echo $product->descripcion ?></td>
                    <td> <img class="materialboxed" width="150" height="100" src="<?php echo BASE_URL ?>resource/images/products/<?php echo $product->imagen ?>" /></td>
                    <td><a class="btn-floating waves-effect waves-light blue" href="newcategory/<?php echo $category->id ?>"><i class="material-icons">settings_input_component</i></a>
                        <a class="btn-floating waves-effect waves-light red" href="deletecategory/<?php echo $category->id ?>"><i class="material-icons">delete</i></a>
                    </td>                    
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
