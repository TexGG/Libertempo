<?php
defined( '_PHP_CONGES' ) or die( 'Restricted access' );
include TEMPLATE_PATH . 'template_define.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php /* JQUERY */ ?>
        <link type="text/css" href="<?= TEMPLATE_PATH ?>jquery/css/custom-theme/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
        <?php /* BOOTSTRAP */?>
        <link type="text/css" href="<?= TEMPLATE_PATH ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <?php /* FONT AWESOME */ ?>
        <link href="<?= TEMPLATE_PATH ?>/font-awesome/css/font-awesome.css" rel="stylesheet">
        <?php /* REBOOT STYLE */ ?>
        <link type="text/css" href="<?= TEMPLATE_PATH ?>/css/reboot.css" rel="stylesheet" rel="stylesheet" media="screen">
        <?php /* SCRIPTS */ ?>
        <script type="text/javascript" src="<?= TEMPLATE_PATH ?>jquery/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?= TEMPLATE_PATH ?>jquery/js/jquery-ui-1.8.17.custom.min.js"></script>
        <script type="text/javascript" src="<?= TEMPLATE_PATH ?>jquery/js/jquery.tablesorter.min.js"></script>
        <?= $additional_head ?>
    </head>
    <body class="login">
        <header>
            <h1 class="login-heading">Libertempo</h1>
        </header>
