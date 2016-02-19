<div class="row">
    <div class="col s12">
        <h5>Editar Servicio <?php echo $service->nombre; ?></h5>
        <form action="<?php echo $service->id; ?>" method="post">
            <?php include '_partial/_campos.tpl.php'; ?>
            <button class="btn">Actualizar</button>
        </form>
    </div>
</div>