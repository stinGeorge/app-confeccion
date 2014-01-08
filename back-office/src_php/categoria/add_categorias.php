<?php
$tab = 1;
$title = "Agregar nueva categoría";
include_once('../lib/header.php');
?>
<section id="migas">
	<h2><a href="<?php echo RAIZ ?>">Home</a> > <a href="categorias.php">Lista de categorías</a> > <?php echo $title; ?></h2>
	<ul>
		<li><a href="categorias.php">Volver a la lista</a></li><li>
		<a href="#" onclick="window.document.forms.form_prod.submit();">Guardar</a></li><li>
		<a href="categorias.php">Guardar y continuar</a></li><li>
		<a href="categorias.php">Duplicar</a></li><li>
		<a href="categorias.php">Reiniciar</a></li><li>
		<a href="categorias.php">Eliminar</a></li>
	</ul>
</section>
<section id="conten_categorias">

</section>
<?php
include_once('../lib/footer.php');
?>