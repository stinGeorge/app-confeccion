<?php
$raiz = "../";
$tab = 1;
$title = "Añadir nueva producción";
include_once($raiz.'lib/header.php');
?>
<section id="migas">
	<h2>
		<a href="<?php echo $raiz; ?>">Home</a> > <a href="produccion.php">Lista de producción</a> > <?php echo $title; ?>
	</h2>
	<a href="produccion.php">Volver a la lista</a>
</section>
<aside id="info_aside">
	<ul>
		<li><a id="prod1" href="#" class="step_on">Información</a></li>
		<li><a id="prod2" href="#">Cantidad</a></li>
		<li><a id="prod3" href="#">Tiempos</a></li>
		<li><a id="prod4" href="#">Indicaciones</a></li>
		<li><a id="prod5" href="#">Accesorios</a></li>
		<li><a id="prod6" href="#">Imágenes</a></li>
	</ul>
</aside>
<section id="info_block">
	<form accept="form_produccion.php" method="post">
		<div id="step1">
			<h2>Información general de producción</h2>
			<table summary="Informacion general de produccion">
				<tbody>
					<tr>
						<td><label for="orden">Orden: </label></td>
						<td><input name="orden" id="orden" type="text"></td>
					</tr>
					<tr>
						<td><label for="articulo">Artículo: </label></td>
						<td><input name="articulo" id="articulo" type="text"></td>
					</tr>
					<tr>
						<td><label for="empresa">Empresa: </label></td>
						<td><input name="empresa" id="empresa" type="text"></td>
					</tr>
					<tr>
						<td><label for="modelo">Modelo: </label></td>
						<td><input name="modelo" id="modelo" type="text"></td>
					</tr>
					<tr>
						<td><label for="categoria">Categoría: </label></td>
						<td><input name="categoria" id="categoria" type="text"></td>
					</tr>
					<tr>
						<td><label for="tela">Tela: </label></td>
						<td><input name="tela" id="tela" type="text"></td>
					</tr>
					<tr>
						<td><label for="moldes_guia">Moldes guía: </label></td>
						<td><input name="moldes_guia" id="moldes_guia" type="text"></td>
					</tr>
					<tr>
						<td><label for="color">Color: </label></td>
						<td><input name="color" id="color" type="color"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="step2">
			<h2>Información sobre cantidades y tallas</h2>
			<table summary="Informacion sobre cantidades y tallas">
				<tbody>
					<tr>
						<td><label for="cantidad">Cantidad: </label></td>
						<td><input name="cantidad" id="cantidad" type="number"></td>
					</tr>
					<tr>
						<td><label for="grupo1">Grupo 1: </label></td>
						<td><input name="grupo1" id="grupo1" type="text"></td>
					</tr>
					<tr>
						<td><label for="grupo2">Grupo 2: </label></td>
						<td><input name="grupo2" id="grupo2" type="text"></td>
					</tr>
					<tr>
						<td><label for="grupo3">Grupo 3: </label></td>
						<td><input name="grupo3" id="grupo3" type="text"></td>
					</tr>
					<tr>
						<td><label for="grupo4">Grupo 4: </label></td>
						<td><input name="grupo4" id="grupo4" type="text"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="step3">
			<h2>Información sobre tiempos y fechas</h2>
			<table summary="Información sobre tiempos y fechas">
				<tbody>
					<tr>
						<td><label for="fecha_ingreso">Fecha de ingreso: </label></td>
						<td><input name="fecha_ingreso" id="fecha_ingreso" type="date"></td>
					</tr>
					<tr>
						<td><label for="fecha_entrega">Fecha de entrega: </label></td>
						<td><input name="fecha_entrega" id="fecha_entrega" type="date"></td>
					</tr>
					<tr>
						<td><label for="duracion">Días empleados: </label></td>
						<td><input name="duracion" id="duracion" type="number"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="step4">
			<h2>Indicaciones, notas y acotaciones</h2>
			<table summary="Indicaciones, notas y acotaciones">
				<tbody>
					<tr>
						<td><label for="indicaciones">Indicaciones: </label></td>
						<td><textarea name="indicaciones" id="indicaciones"></textarea></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="step5">
			<h2>Accesorios</h2>
			<table summary="Accesorios">
				<tbody>
					<tr>
						<td><label for="etiquetas">Etiquetas: </label></td>
						<td><textarea name="etiquetas" id="etiquetas"></textarea></td>
					</tr>
					<tr>
						<td><label for="botones">Botones: </label></td>
						<td><textarea name="botones" id="botones"></textarea></td>
					</tr>
					<tr>
						<td><label for="cierres">Cierres: </label></td>
						<td><textarea name="cierres" id="cierres"></textarea></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="step6">
			<h2>Imágenes</h2>
			<table summary="Imágenes">
				<tbody>
					<tr>
						<td><label for="imagen">Imágenes de la prenda: </label></td>
						<td><input name="imagen" id="imagen" type="file"></td>
					</tr>
					<tr>
						<td><label for="muestra_tela">Muestra de tela: </label></td>
						<td><input name="muestra_tela" id="muestra_tela" type="file"></td>
					</tr>
				</tbody>
			</table>
		</div>
	</form>
</section>
<?php
include_once($raiz.'lib/footer.php');
?>