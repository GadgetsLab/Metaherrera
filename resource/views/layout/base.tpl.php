<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php $title = isset($title) ? $title : "Framewok Newbie"; ?>
    <title><?php echo $title; ?></title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,300,100,700' rel='stylesheet' type='text/css'>
    <?php style('css/normalize.css'); ?>
    <?php style('css/template.css'); ?>
    <?php style('css/materialize.min.css'); ?>
    <?php style('css/ed-grid.css'); ?>
    <?php style('css/home.css'); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
<header>
    <section id="logo">
        <a href="<?php echo BASE_PUBLIC."/web" ?>"><img src="http://lorempixel.com/300/90/nature"></a>  
    </section>

    <nav class="blue-grey darken-2" id="navigation">
        <div class="menu__movil hasta-tablet centrar blue-grey darken-5"><i class="material-icons">menu</i></div>
            <ul class="nav__item">
                <li class="centrar"><?php route('web','Inicio'); ?></li>
                <li class="centrar"><?php route('web/about','Nosotros'); ?></li>
                <li class="centrar"><?php route('web/product','Productos'); ?></li>
                <li class="centrar"><?php route('web','Contacto'); ?></li>
            </ul>
    </nav>

</header>
<?php include '../alerts/alerts.tpl.php'; ?>

        <?php include $content; ?>

<footer class="page-footer blue-grey darken-3 white-text letter-white">
    <div class="ed-container">
        <p>Contactenos</p><br />
        <p>Correo: correo@hotmail.com</p><br />
        <p>Tel: 555-444-321</p>

    </div>
    <div class="footer-copyright blue-grey darken-4">
        <div class="ed-container">    
            <small>Copyright 2016 metaherrera|Todos los derechos reservados|Desarrollado por: GadgetsLab</small>
        </div>
    </div>
</footer>      
    <?php script('js/jquery.min.js')?>
    <?php script('js/materialize.min.js')?>
    <?php script('js/tinymce.min.js'); ?>
    <?php script('js/template.js'); ?>
</body>
</html>