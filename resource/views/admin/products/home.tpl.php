<div class="row">
    <div class="col s12">
        <h5>Todos los Productos</h5>
        <table class="striped white">
            <thead>
            <tr>
                <th>Estado</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Categoria</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?php if($product->estado == 1){ ?>
                            <a class="btn-floating waves-effect waves-light green" href="productupordown/<?php echo $product->id ?>/2"><i class="material-icons">thumb_up</i></a>
                        <?php }else{ ?>
                            <a class="btn-floating waves-effect waves-light red" href="productupordown/<?php echo $product->id ?>/1"><i class="material-icons">thumb_down</i></a>
                        <?php } ?></td>
                    <td><?php echo $product->nombre ?></td>
                    <td><?php echo $product->descripcion ?></td>
                    <td>
                        <?php
                            $category = new \App\Models\Categories();
                            $category_name = $category->find($product->id_cat);
                            echo $category_name->nombre;
                        ?>
                    </td>
                    <td> <img class="materialboxed" width="150" height="100" src="<?php echo BASE_URL ?>resource/images/products/<?php echo $product->imagen ?>" /></td>
                    <td><a class="btn-floating waves-effect waves-light blue" href="newproduct/<?php echo $product->id ?>"><i class="material-icons">settings_input_component</i></a>
                        <a class="btn-floating waves-effect waves-light red" href="deleteproduct/<?php echo $product->id ?>"><i class="material-icons">delete</i></a>
                    </td>                    
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
