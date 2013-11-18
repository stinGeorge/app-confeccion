<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta content="300" http-equiv="refresh" />
    <title><?php echo $title; ?></title>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="<?php echo $raiz; ?>js/main.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo $raiz; ?>css/main_style.css">
</head>
<body>

<div id="contenedor">
<header id="cabecera">
    <h1><a href="<?php echo $raiz; ?>">Confecciones Sting</a></h1>
</header>
<nav id="menu_bar">
    <ul id="main_menu">
        <li id="menutab1"<?php echo ($tab==1)?' class="nav_on"':''; ?>>
            <a href="#">Producción</a>
            <ul class="sub_menu">
                <li><a href="<?php echo $raiz; ?>produccion/produccion.php">Gestionar la producción</a></li>
                <li><a href="#">Gestionar las categorías</a></li>
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
