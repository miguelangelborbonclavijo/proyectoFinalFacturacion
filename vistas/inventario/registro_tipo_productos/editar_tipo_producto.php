<?php
include("../../registros/db.php");
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "SELECT * FROM tipodeproducto WHERE TipId = $id";
	$resuleditar = mysqli_query($conn, $query);
	if (mysqli_num_rows($resuleditar) == 1) {
		$filas = mysqli_fetch_array($resuleditar);
		$TipNomPro = $filas['TipNom'];
	}
}
if (isset($_POST['actualizar_tipProducto'])) {
	$id = $_GET['id'];
	$TipNomPro = $_POST['TipNomPro'];
	$query = "UPDATE tipodeproducto set TipNom = '$TipNomPro' WHERE TipId = $id";
	mysqli_query($conn, $query);
	header("Location: ../registro_tipo_productos/registro_tipo_producto.php");
}
?>
<?php include("../../includes/head.php") ?>
<main style="margin-top:50px;">
	<form action="../registro_tipo_productos/editar_tipo_producto.php?id=<?php echo $_GET['id']; ?>" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
		<table>
			<h1 style="text-align: center;">REGISTRO DE TIPOS DE PRODUCTOS</h1>
			<hr>
			<table>
				<tr>
					<td></td>
					<td style="width: 200px; text-align: center">
						<p><strong>DATOS DEL TIPO DE PRODUCTO</strong></p>
					</td>
					<td></td>
				</tr>
			</table>
			<table>
				<div class="col-md-12 position-relative">
					<label for="validationTooltip01" class="form-label">TIPO DE PRODUCTO:</label>
					<input type="text" name="TipNomPro" class="form-control" id="validationTooltip01" required value="<?php echo $TipNomPro ?>">
					<div class="valid-tooltip">
						Documento valido...!
					</div>
					<div class="invalid-tooltip">
						Documento no valido.
					</div>
				</div>
			</table>
			<br>
			<table>
				<tr>
					<td>
						<br>
						<label for="cbox2">Señor usuario asegurese que los datos digitados estan correctos.</label>
						<br><br>
					</td>
				</tr>
			</table>
			<br>
			<table>
				<tr>
					<div style="margin-right: 10%" class="esp col-3">
						<button type="submit" name="actualizar_tipProducto" value="actualizar_tipProducto" class="btn btn-success">Actualizar</button>
					</div>
					<div style="margin-right:10%" class="esp col-3">
						<button class="btn btn-warning" type="reset">Limpiar datos</button>
					</div>
					<div class="esp col-3">
						<a href="../registros/consultar_tipo_producto.php" class="btn btn-primary">Consultar Tipo Producto</a>
					</div>
				</tr>
			</table>
	</form>
</main>
<?php include("../../includes/footer.php") ?>