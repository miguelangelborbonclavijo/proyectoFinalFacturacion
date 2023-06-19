<?php
	include("db.php");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "SELECT * FROM productos WHERE ProId = $id";
		$resuleditar = mysqli_query($conn, $query);
		if(mysqli_num_rows($resuleditar) ==1){
			$filas = mysqli_fetch_array($resuleditar);
            $TipPro = $filas['ProTip'];
            $DesPro = $filas['ProDes'];
            $PreCom = $filas['ProPreCo'];
            $PreVen = $filas['ProPreVe'];
		}
	}
    if(isset($_POST['actualizar_producto'])){
        $id = $_GET['id'];
        $TipPro = $_POST['TipPro'];
        $DesPro = $_POST['DesPro'];
        $PreCom = $_POST['PreCom'];
        $PreVen = $_POST['PreVent'];
        $query = "UPDATE productos set ProTip = '$TipPro', ProDes = '$DesPro', ProPreCo = '$PreCom' , ProPreVe = '$PreVen' WHERE ProId = $id";
        mysqli_query($conn, $query);
		header("Location: registro_productos.php");
    }
?>
<?php include("../includes/head.php") ?>
<main style="margin-top:50px;">
<form action="../registros/editar_productos.php?id=<?php echo $_GET['id']; ?>" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
<h1 style="text-align: center;">REGISTRO DE PRODUCTOS</h1>
<hr>
<table>
<tr>
<td></td>
<td style="width: 200px; text-align: center"><p><strong>DATOS DEL PRODUCTO</strong></p></td>
<td></td>
</tr>
</table>
<table>
<div class="col-md-12 position-relative">
<label for="validationTooltip01" class="form-label">TIPO DE PRODUCTO:</label>
<input type="number" name="TipPro" class="form-control" id="validationTooltip01" required  value="<?php echo $TipPro?>">
<div class="valid-tooltip">
Documento valido...!
</div>
<div class="invalid-tooltip">
Documento no valido.
</div>
</div>
<div class="col-md-12 position-relative">
<label for="validationTooltip01" class="form-label">DESCRIPCION:</label>
<input type="text" name="DesPro" class="form-control" id="validationTooltip01" required  value="<?php echo $DesPro?>">
<div class="valid-tooltip">
Documento valido...!
</div>
<div class="invalid-tooltip">
Documento no valido.
</div>
</div>
<div class="col-md-6 position-relative">
<label for="validationTooltip01" class="form-label">PRECIO DE COMPRA:</label>
<input  type="number" name="PreCom" class="form-control" id="validationTooltip01" required value="<?php echo $PreCom?>">
<div class="valid-tooltip">
Documento valido...!
</div>
<div class="invalid-tooltip">
Documento no valido.
</div>
</div>
<div class="col-md-6 position-relative">
<label for="validationTooltip01" class="form-label">PRECIO DE VENTA:</label>
<input type="number" name="PreVent" class="form-control" id="validationTooltip01" required value="<?php echo $PreVen?>">
<div class="valid-tooltip">
Documento valido...!
</div>
<div class="invalid-tooltip">
Documento no valido.
</div>
</div>
<br>
<br>
<table>
<tr>
<td>
<label for="cbox2">Señor usuario asegurese que los datos digitados estan correctos.</label>
<br>
</td>
</tr>
</table>
<table>
<br>
<table>
<tr>
<div style="margin-right: 12%" class="esp col-3" >
<button type="submit" name="actualizar_producto" value="actualizar_producto" class="btn btn-success">Actualizar</button>
</div>
<div style="margin-right: 13%" class="esp col-3">
<button class="btn btn-warning" type="reset">Limpiar datos</button>
</div>

</table>
</table>
</form>
<?php include("../includes/footer.php")?>
</body>
</html>