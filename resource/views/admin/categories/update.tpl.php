<div class="row">
    <div class="col s12">
        <h5>Editar Categoria <?php echo $category->nombre; ?></h5>
        <form action="<?php echo $category->id; ?>" method="post">
            <?php include '_partial/_campos.tpl.php'; ?>
            <button class="btn">Actualizar</button>
        </form>
    </div>
</div>