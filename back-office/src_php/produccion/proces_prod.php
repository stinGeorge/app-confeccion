<?php
$orden = $_POST['num_orden'];
$empresa = $_POST['empresa'];
$prenda = $_POST['nomb_prenda'];
echo $orden.'<br />'.$empresa.'<br />'.$prenda.'<br />';
echo $_FILES['muestra_tela']['name'][2];
echo 'Carga de variables completa';
?>