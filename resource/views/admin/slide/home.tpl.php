<div class="row">
    <div class="col s12">
        <h5>Lista de items del slide</h5>
        <br>
        <a class="btn-floating waves-effect waves-light green" href="newslide"><i class="material-icons">add</i></a>
        <br><br>

        <table class="striped white">
            <thead>
            <tr>
                <th>Id</th>
                <th>Estado</th>
                <th>Titulo</th>
                <th>Subtitulo</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($sliders as $slide): ?>
                <tr>
                    <td><?php echo $slide->id ?></td>
                    <td>
                        <?php if($slide->estado == 1){ ?>
                            <a class="btn-floating waves-effect waves-light green" href="slideupordown/<?php echo $slide->id ?>/2"><i class="material-icons">thumb_up</i></a>
                        <?php }else{ ?>
                            <a class="btn-floating waves-effect waves-light red" href="slideupordown/<?php echo $slide->id ?>/1"><i class="material-icons">thumb_down</i></a>
                        <?php } ?>
                    </td>
                    <td><?php echo $slide->titulo ?></td>
                    <td><?php echo $slide->subtitulo ?></td>
                    <td> <img class="materialboxed" width="150" height="100" src="<?php echo BASE_URL ?>resource/images/slide/<?php echo $slide->imagen ?>" /></td>
                    <td><a class="btn-floating waves-effect waves-light blue" href="newslide/<?php echo $slide->id ?>"><i class="material-icons">settings_input_component</i></a>
                        <a class="btn-floating waves-effect waves-light red" href="deleteslide/<?php echo $slide->id ?>"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

