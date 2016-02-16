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

<?php include '../alerts/alerts.tpl.php'; ?>

<?php include $content; ?>

<?php script('js/jquery.min.js')?>
<?php script('js/materialize.min.js')?>
<?php script('js/template.js'); ?>
</body>
</html>