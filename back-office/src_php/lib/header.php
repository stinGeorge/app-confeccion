<?php
//DEFINIR LA RAIZ DE TU WEB, PUEDE O NO ACABAR CON /
include_once($_SERVER['DOCUMENT_ROOT'].'/confeccion/back-office/src_php/lib/funciones.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta content="300" http-equiv="refresh" />
    <title><?php echo $title; ?></title>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="<?php echo RAIZ ?>/src_js/main.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo RAIZ ?>/src_css/main_style.css">
</head>
<body>

<div id="contenedor">
<header id="cabecera">
    <h1><a href="<?php echo RAIZ ?>">Nombre de la empresa</a></h1>
</header>
<nav id="menu_bar">
    <ul id="main_menu">
        <li id="menutab1"<?php echo ($tab==1)?' class="nav_on"':''; ?>>
            <a href="#">Producción</a>
            <ul class="sub_menu">
                <li><a href="<?php echo RAIZ ?>/src_php/produccion/produccion.php">Gestionar producción</a></li>
                <li><a href="<?php echo RAIZ ?>/src_php/categoria/categorias.php">Gestionar categorías</a></li>
                <li><a href="#">Eliminar</a></li>
            </ul>
        </li><li id="menutab2"<?php echo ($tab==2)?' class="nav_on"':''; ?>>
            <a href="#">Precios</a>
            <ul class="sub_menu">
                <li><a href="#">Agregar</a></li>
                <li><a href="#">Modificar</a></li>
                <li><a href="#">Eliminar</a></li>
            </ul>
        </li><li id="menutab3"<?php echo ($tab==3)?' class="nav_on"':''; ?>>
            <a href="#">Buscar datos</a>
            <ul class="sub_menu">
                <li><a href="#">Agregar</a></li>
                <li><a href="#">Modificar</a></li>
                <li><a href="#">Eliminar</a></li>
            </ul>
        </li><li id="menutab4"<?php echo ($tab==4)?' class="nav_on"':''; ?>>
            <a href="#">Precios</a>
            <ul class="sub_menu">
                <li><a href="#">Agregar</a></li>
                <li><a href="#">Modificar</a></li>
                <li><a href="#">Eliminar</a></li>
            </ul>
        </li>
    </ul>
</nav>
