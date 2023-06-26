<?php
	include("../../registros/db.php");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "SELECT * FROM proveedores WHERE PrId = $id";
		$resuleditar = mysqli_query($conn, $query);
		if(mysqli_num_rows($resuleditar) ==1){
			$filas = mysqli_fetch_array($resuleditar);
            $TipNomProv = $filas['PrNomPr'];
            $TipDirrP = $filas['PrDirr'];
		}
	}
    if(isset($_POST['actualizar_tipProveedor'])){
        $id = $_GET['id'];
        $TipNomProv = $_POST['NomPro'];
        $TipDirrP = $_POST['Dirr'];
        $query = "UPDATE proveedores set PrNomPr = '$TipNomProv', PrDirr = '$TipDirrP' WHERE PrId = $id";
        mysqli_query($conn, $query);
		header("Location: ../registro_proveedores/registro_proveedor.php");
    }
?>
<?php include("../../../includes/head.php")?>
<a href="../../../../../vistas/Trabajadores/compras/tip_compras.php" class="btn btn-primary">Regresar</a>
    <main class="p-5 text-center text-sm-start">
    <form action="../registro_proveedores/editar_proveedores.php?id=<?php echo $_GET['id']; ?>" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
	<h1 style="text-align: center;">ACTUALIZAR DE PROVEEDORES</h1>
	<hr>
    <table>
            <tr>
                <td></td>
                <td style="width: 200px; text-align: center"><p><strong>DATOS DEL PROVEEDOR</strong></p></td>
                <td></td>
            </tr>
        </table>
    <table>
    <table>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">NIP PROVEEDOR:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="NipPro" required  value="<?php echo $id?>">
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">NOMBRE DEL PROVEDOR:</label>
            <input type="text" class="form-control" id="validationTooltip01" name="NomPro" required  value="<?php echo $TipNomProv?>">
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-12 position-relative">
            <label for="validationTooltip01" class="form-label">DIRRECCION:</label>
            <input type="text" class="form-control" id="validationTooltip01" name="Dirr" required  value="<?php echo $TipDirrP?>">
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
                <button type="submit" name="actualizar_tipProveedor" value="actualizar_tipProveedor" class="btn btn-success">Actualizar</button>
            </div>
            <div style="margin-right: 13%" class="esp col-3">
                <button class="btn btn-warning" type="reset">Limpiar datos</button>
            </div>
            <div  class="esp col-3">
                <a href="../registro_proveedores/consultar_proveedores.php" class="btn btn-primary">Consultar Producto</a>
            </div>
        </tr>
        </table>
    </table>
    </form>
</main>
<?php include("../../../includes/footer.php") ?>