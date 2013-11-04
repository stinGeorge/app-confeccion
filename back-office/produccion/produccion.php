<?php
$raiz = "../";
$tab = 1;
$title = "Lista de producción";
include_once($raiz.'lib/header.php');
?>
<section id="migas">
	<h2><a href="<?php echo $raiz; ?>">Home</a> > <?php echo $title; ?></h2>
	<a href="add_produccion.php">Añadir nuevo</a>
</section>
<section id="conten_produccion">
	<table cellspacing="0">
		<thead>
			<tr>
				<th class="s">ID</th>
				<th class="m">Imágen</th>
				<th class="l">Nombre</th>
				<th class="m">Categoría</th>
				<th class="m">Empresa</th>
				<th class="s">Cantidad</th>
				<th class="m">Fecha inicio</th>
				<th class="m">Fecha entrega</th>
				<th class="s">Duración</th>
				<th class="m">Acciones</th>
			</tr>
		</thead>
		<tr>
			<td><input type="text" /></td>
			<td style="text-align: center"> --- </td>
			<td><input type="text" /></td>
			<td><input type="text" /></td>
			<td><input type="text" /></td>
			<td><input type="text" /></td>
			<td><input type="text" /></td>
			<td><input type="text" /></td>
			<td><input type="text" /></td>
			<td><input type="text" /></td>
		</tr>
	</table>
</section>
<?php
include_once($raiz.'lib/footer.php');
?>