<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php $title = isset($title) ? $title : "Framewok Newbie"; ?>
    <title><?php echo $title; ?></title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Six+Caps' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,300,100,700' rel='stylesheet' type='text/css'>
    <?php style('css/normalize.css'); ?>
    <?php style('css/template.css'); ?>
    <?php style('css/materialize.min.css'); ?>
    <?php style('css/ed-grid.css'); ?>
    <?php style('css/home.css'); ?>
    <?php style('css/contact.css') ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
<header>
    <section id="logo">
        <a href="<?php echo BASE_PUBLIC."/web" ?>">METAHERRERA</a>
    </section>
    <nav class="grey lighten-4" id="navigation">
        <div class="menu__movil hasta-tablet centrar blue-grey darken-5"><i class="material-icons">menu</i></div>
        <ul class="nav__item">
            <?php if($menu_active == 'inicio'){ ?>
                <li class="centrar"><?php route('web','Inicio', null,['class' => 'active']); ?></li>
            <?php }else{?>
                <li class="centrar"><?php route('web','Inicio'); ?></li>
            <?php } ?>
            <?php if($menu_active == 'about'){ ?>
                <li class="centrar"><?php route('web/about','Nosotros', null,['class' => 'active']); ?></li>
            <?php }else{?>
                <li class="centrar"><?php route('web/about','Nosotros'); ?></li>
            <?php } ?>
            <?php if($menu_active == 'product'){ ?>
                <li class="centrar"><?php route('web/product','Productos',null, ['class' => 'active']); ?></li>
            <?php }else{?>
                <li class="centrar"><?php route('web/product','Productos'); ?></li>
            <?php } ?>
            <?php if($menu_active == 'contact'){ ?>
                <li class="centrar"><?php route('web/contact','Contacto',null, ['class' => 'active']); ?></li>
            <?php }else{?>
                <li class="centrar"><?php route('web/contact','Contacto'); ?></li>
            <?php } ?>
        </ul>
    </nav>

</header>
<?php include '../alerts/alerts.tpl.php'; ?>

<?php include $content; ?>

<footer class="page-footer grey darken-4 white-text letter-white">
    <div class="ed-container padding-3">
        <div class="ed-item tablet-50">
            <h4>METAHERRERA Ltda</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium praesentium sapiente tenetur vero. Accusamus, at debitis delectus, enim ex itaque mollitia nam natus nemo officia optio sequi, veniam veritatis vitae?</p>
        </div>
        <div class="ed-item tablet-50 right-align">
            <h4>Contáctenos</h4>
            <p class="right-align"><i class="tiny material-icons">room</i> AAAAAAAAAAAA</p>
            <p class="right-align"><i class="tiny material-icons">phone</i> (574)555555555</p>
            <p class="right-align"><i class="tiny material-icons">email</i> contacto@metaherrera.com</p>
        </div>
    </div>
    <div class="footer-copyright grey darken-3">
        <div class="ed-container">
            <small>Copyright&copy; <?php echo date('Y'); ?> metaherrera|Todos los derechos reservados|Desarrollado por: GadgetsLab</small>
        </div>
    </div>
</footer>
<?php script('js/jquery.min.js')?>
<?php script('js/materialize.min.js')?>
<?php script('js/tinymce.min.js'); ?>
<?php script('js/template.js'); ?>
</body>
</html>