<div class="row">
    <div class="col s12">
        <h5>Editar usuario</h5>
        <form action="<?php echo BASE_PUBLIC ?>/admin/newuser/<?php echo $user->id ?>" method="post">
            <?php include '_partial/_campos.tpl.php'; ?>
            <button class="btn">Crear</button>
        </form>
    </div>
</div>