<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php $title = isset($title) ? $title : "Framewok Newbie"; ?>
    <title><?php echo $title; ?></title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php style('css/template.css'); ?>
    <?php style('css/materialize.min.css'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body class="blue-grey lighten-5">
    <?php include '../alerts/alerts.tpl.php'; ?>

<div class="row">
    <div class="col s3 fixed white height-full no-padding">
        <div class="logo sidebar_header">
        </div>
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header"><i class="material-icons">settings_applications</i>configuracion de pagina</div>
                <div class="collapsible-body">
                    <div class="collection">
                        <a href="#!" class="collection-item">Visión - Misión</a>
                        <a href="#!" class="collection-item">Nuestra empresa</a>
                        <a href="#!" class="collection-item">Slide</a>
                        <a href="#!" class="collection-item">Contacto</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">supervisor_account</i>Usuarios</div>
                <div class="collapsible-body">
                    <div class="collection">
                        <a href="#!" class="collection-item">Nuevo</a>
                        <a href="#!" class="collection-item">Todos</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">markunread_mailbox</i>Productos</div>
                <div class="collapsible-body">
                    <div class="collection">
                        <a href="#!" class="collection-item">Nuevo</a>
                        <a href="#!" class="collection-item">Todos</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">swap_vertical_circle</i>Servicios</div>
                <div class="collapsible-body">
                    <div class="collection">
                        <a href="#!" class="collection-item">Nuevo</a>
                        <a href="#!" class="collection-item">Todos</a>
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