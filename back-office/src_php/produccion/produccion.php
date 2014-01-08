<?php
$tab = 1;
$title = "Gestionar la producción";
include_once('../lib/header.php');
?>
<section id="migas">
	<h2><a href="<?php echo RAIZ ?>">Home</a> > <?php echo $title; ?></h2>
	<ul>
		<li><a href="add_produccion.php">Agregar nuevo</a></li>
	</ul>
</section>
<section id="conten_produccion">
	<table cellspacing="0">
		<thead>
			<tr>
				<th class="s">Código</th>
				<th class="m">Imágen</th>
				<th class="l">Nombre</th>
				<th class="s">Precio</th>
				<th class="m">Empresa</th>
				<th class="s">Cantidad</th>
				<th class="m">Fecha inicio</th>
				<th class="s">Estado</th>
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
		</tr>
	</table>
</section>
<?php
include_once('../lib/footer.php');
?>