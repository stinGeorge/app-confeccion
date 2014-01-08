<?php
$tab = 1;
$title = "Agregar nueva producción";
include_once('../lib/header.php');
?>
<section id="migas">
	<h2><a href="<?php echo RAIZ ?>">Home</a> > <a href="produccion.php">Lista de producción</a> > <?php echo $title; ?></h2>
	<ul>
		<li><a href="produccion.php">Volver a la lista</a></li><li>
		<a href="#" onclick="window.document.forms.form_prod.submit();">Guardar</a></li><li>
		<a href="produccion.php">Guardar y continuar</a></li><li>
		<a href="produccion.php">Duplicar</a></li><li>
		<a href="produccion.php">Reiniciar</a></li><li>
		<a href="produccion.php">Eliminar</a></li>
	</ul>
</section>
<aside id="info_aside">
	<ul>
		<li><a id="prod1" href="#" class="step_on">Información</a></li>
		<li><a id="prod2" href="#">Cantidad</a></li>
		<li><a id="prod3" href="#">Precios</a></li>
		<li><a id="prod4" href="#">Categorías</a></li>
		<li><a id="prod5" href="#">Tiempos</a></li>
		<li><a id="prod6" href="#">Imágenes</a></li>
		<li><a id="prod7" href="#">Accesorios</a></li>
		<li><a id="prod8" href="#">Indicaciones</a></li>
	</ul>
</aside>
<section id="info_block">
	<form id="form_prod" name="form_prod" action="proces_prod.php" method="post" enctype="multipart/form-data">
		<div id="step1">
			<h2>Información general de producción</h2>
			<table summary="Informacion general de produccion">
				<tbody>
					<tr>
						<td><label for="cod_prenda">Código: </label></td>
						<td><input name="cod_prenda" id="cod_prenda" type="text"></td>
					</tr>
					<tr>
						<td><label for="num_orden">Número de orden: </label></td>
						<td><input name="num_orden" id="num_orden" type="text"></td>
					</tr>
					<tr>
						<td><label for="nomb_prenda">Nombre de la prenda: </label></td>
						<td><input name="nomb_prenda" id="nomb_prenda" type="text"></td>
					</tr>
					<tr>
						<td><label for="empresa">Empresa: </label></td>
						<td><input name="empresa" id="empresa" type="text"></td>
					</tr>
					<tr>
						<td><label for="cliente">Cliente: </label></td>
						<td><input name="cliente" id="cliente" type="text"></td>
					</tr>
					<tr>
						<td><label for="modelo">Modelo: </label></td>
						<td><input name="modelo" id="modelo" type="text"></td>
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
					<tr>
						<td><label for="estado">Estado: </label></td>
						<td><input name="estado" id="estado" type="text"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="step2">
			<h2>Información sobre cantidades y tallas</h2>
			<table summary="Informacion sobre cantidades y tallas">
				<tbody id="grupo_categorias">
					<tr>
						<td><label for="cantidad">Cantidad total: </label></td>
						<td><input name="cantidad" id="cantidad" type="number"> <span id="add_paquete" class="boton">Agregar paquete</span></td>
					</tr>
					<tr>
						<td style="border-bottom:1px solid olive; padding-top:10px" colspan="2"><label>PAQUETE 1: </label></td>
					</tr>
					<tr>
						<td><label for="talla1">Talla: </label></td>
						<td><input name="talla1" id="talla1" type="number"></td>
					</tr>
					<tr>
						<td><label for="sucantidad1">Cantidad: </label></td>
						<td><input name="sucantidad1" id="sucantidad1" type="number"></td>
					</tr>
					<tr>
						<td><label for="num_paquetes1">Número de paquetes: </label></td>
						<td><input name="num_paquetes1" id="num_paquetes1" type="number"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="step3">
			<h2>Información sobre el flujo de precios</h2>
			<table summary="Informacion sobre cantidades y tallas">
				<tbody id="grupo_categorias">
					<tr>
						<td><label for="precio_base">Precio base: </label></td>
						<td><input name="precio_base" id="precio_base" type="number"></td>
					</tr>
					<tr>
						<td><label for="precio_final">Precio final: </label></td>
						<td><input name="precio_final" id="precio_final" type="number"></td>
					</tr>
					<tr>
						<td><label for="motivo_mod">Motivos de modificación: </label></td>
						<td><textarea name="motivo_mod" id="motivo_mod"></textarea></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="step4">
			<h2>Asociaciones de producción a categorías</h2>
			<div id="categorias">
				<span class="folder"> <input name="categorias" type="checkbox" value="pantalon"/> Prendas</span><br />
				<ul>
					<li class="start-line"><input name="categorias" type="checkbox" value="short"/> Short</li>
					<li class="start-line"><input name="categorias" type="checkbox" value="casaca"/> Casaca</li>
					<li class="start-line"><input name="categorias" type="checkbox" value="casaca"/> Polo</li>
					<li class="start-line"><input name="categorias" type="checkbox" value="casaca"/> Pantalón</li>
					<li class="end-line"><input name="categorias" type="checkbox" value="casaca"/> Camisa</li>
				</ul>
			</div>
		</div>
		<div id="step5">
			<h2>Información sobre tiempos y fechas</h2>
			<table summary="Información sobre tiempos y fechas">
				<tbody>
					<tr>
						<td><label for="fecha_ingreso">Fecha de ingreso: </label></td>
						<td><input name="fecha_ingreso" id="fecha_ingreso" type="date"></td>
					</tr>
					<tr>
						<td><label for="fecha_inicio">Fecha de inicio: </label></td>
						<td><input name="fecha_inicio" id="fecha_inicio" type="date"></td>
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
		<div id="step6">
			<h2>Gestión de imágenes de la prenda en producción</h2>
			<table summary="Gestión de imágenes de la prenda en producción">
				<tbody>
					<tr>
						<td><label for="imagen">Imágenes de la prenda: </label></td>
						<td>
							<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
							<input name="imagen[]" accept="gif|jpg" id="imagen" multiple="true" type="file">
						</td>
					</tr>
					<tr>
						<td><label for="muestra_tela">Muestra de tela: </label></td>
						<td>
							<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
							<input name="muestra_tela[]" id="muestra_tela" multiple="true" type="file">
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="step7">
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
					<tr>
						<td><label for="hilos">Hilos: </label></td>
						<td><textarea name="hilos" id="hilos"></textarea></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="step8">
			<h2>Indicaciones, notas y acotaciones</h2>
			<table summary="Indicaciones, notas y acotaciones">
				<tbody>
					<tr>
						<td><label for="indicaciones">Indicaciones: </label></td>
						<td><textarea name="indicaciones" id="indicaciones"></textarea></td>
					</tr>
					<tr>
						<td><label for="notas">Notas: </label></td>
						<td><textarea name="notas" id="notas"></textarea></td>
					</tr>
				</tbody>
			</table>
		</div>
	</form>
</section>
<?php
include_once('../lib/footer.php');
?>