<div class="row">
    <div class="col s12">
        <h5>Editar slide #: <?php echo $slide->id; ?></h5>
        <form action="<?php echo $slide->id; ?>" method="post">
            <?php include '_partial/_campos.tpl.php'; ?>
            <button class="btn">Actualizar</button>
        </form>
    </div>
</div>