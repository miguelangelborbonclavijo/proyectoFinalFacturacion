<?php include('../../db.php')?>
<?php include("../../includes/head.php");?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
<a href="../../../login/inicio/index.php" class="btn btn-primary">Regresar</a>
    <form action="../registro_proveedores/guardar_proveedores.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
	<h1 style="text-align: center;">REGISTRO DE PROVEEDORES</h1>
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
            <input type="number" class="form-control" id="validationTooltip01" name="NipPro" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">NOMBRE DEL PROVEDOR:</label>
            <input type="text" class="form-control" id="validationTooltip01" name="NomPro" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">NUMERO DE CELULAR:</label>
            <input type="text" class="form-control" id="validationTooltip01" name="NuCel" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">DIRRECCION:</label>
            <input type="text" class="form-control" id="validationTooltip01" name="Dirre" required>
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
                <button type="submit" name="guardar_proveedores" value="guardar_proveedores" class="btn btn-success">Guardar</button>
            </div>
            <div style="margin-right: 13%" class="esp col-3">
                <button class="btn btn-warning" type="reset">Limpiar datos</button>
            </div>
            <div  class="esp col-3">
                <a href="../../../login/inicio/registro_proveedores/consultar_proveedores.php" class="btn btn-primary">Consultar Producto</a>
            </div>
        </tr>
        </table>
    </table>
    </form>
</main>
<?php include("../../includes/footer.php") ?>

