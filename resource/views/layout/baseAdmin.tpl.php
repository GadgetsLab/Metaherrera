<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php $title = isset($title) ? $title : "Panel Administracion MetaHerrera"; ?>
    <title><?php echo $title; ?></title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php style('css/template.css'); ?>
    <?php style('css/materialize.min.css'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<?php if(getFlashMessage('test')): ?>
    <?php printFlashMessage('test'); ?>
<?php endif ?>
<body class="blue-grey lighten-5">
<div class="row">
    <div class="col s3 fixed white height-full no-padding">
        <div class="logo sidebar_header">
        </div>
        <ul class="collapsible" data-collapsible="accordion">

            <li>
                <div class="collapsible-header"><i class="material-icons">settings_applications</i>Configuracion de pagina</div>
                <div class="collapsible-body">
                    <div class="collection">
                        <?php route('admin', 'Visión - Misión' ,null , ['class' => 'collection-item']); ?>
                        <?php route('admin/enterprise', 'Nuestra empresa', null, ['class' => 'collection-item']); ?>
                        <?php route('admin/slide', 'Slide', null, ['class' => 'collection-item']); ?>
                        <?php route('admin/contact', 'Contacto',null, ['class' => 'collection-item']); ?>
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">supervisor_account</i>Usuarios</div>
                <div class="collapsible-body">
                    <div class="collection">
                        <?php route('admin/newuser', 'Nuevo' ,null , ['class' => 'collection-item']); ?>
                        <?php route('admin/users', 'Listar todo' ,null , ['class' => 'collection-item']); ?>
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">markunread_mailbox</i>Productos</div>
                <div class="collapsible-body">
                    <div class="collection">
                        <?php route('admin/newproduct', 'Nuevo' ,null , ['class' => 'collection-item']); ?>
                        <?php route('admin/product', 'Listar todo' ,null , ['class' => 'collection-item']); ?>
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">toc</i>Categorias</div>
                <div class="collapsible-body">
                    <div class="collection">
                        <?php route('admin/newcategory', 'Nuevo' ,null , ['class' => 'collection-item']); ?>
                        <?php route('admin/category', 'Listar todo' ,null , ['class' => 'collection-item']); ?>
                    </div>
                </div>
            </li>            
            <li>
                <div class="collapsible-header"><i class="material-icons">swap_vertical_circle</i>Servicios</div>
                <div class="collapsible-body">
                    <div class="collection">
                        <?php route('admin/newservice', 'Nuevo' ,null , ['class' => 'collection-item']); ?>
                        <?php route('admin/service', 'Listar todo' ,null , ['class' => 'collection-item']); ?>
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">view_list</i>Lista de contactos</div>
                <div class="collapsible-body">
                    <div class="collection">
                        <?php route('admin/slides', 'Listar todo' ,null , ['class' => 'collection-item']); ?>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="col s9 offset-s3">
        <?php include $content; ?>
    </div>
</div>
<?php script('js/jquery.min.js')?>
<?php script('js/materialize.min.js')?>
<?php script('js/tinymce.min.js'); ?>
<?php script('js/template.js'); ?>
</body>
</html>