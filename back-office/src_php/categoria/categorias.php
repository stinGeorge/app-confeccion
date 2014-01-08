<?php
$tab = 1;
$title = "Gestión de las categorías";
include_once('../lib/header.php');
?>
<section id="migas">
	<h2><a href="<?php echo RAIZ ?>">Home</a> > <?php echo $title; ?></h2>
	<ul>
		<li><a href="add_categorias.php">Agregar nuevo</a></li>
	</ul>
</section>
<section id="conten_categorias">

</section>
<?php
include_once('../lib/footer.php');
?>