<?php include('../registros/db.php')?>
<?php include("../includes/head.php")?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
<form action="../registro_trabajador/guardar_trabajador.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
    <h1 style="text-align: center;">REGISTRO DE TRABAJADOR</h1>
    <table>
        <tr>
            <td></td>
            <td style="width: 200px; text-align: center"><p><strong>DATOS DEL TRABAJADOR</strong></p></td>
            <td></td>
        </tr>
    </table>
    <br>
    <table>
        <div class="col-md-2 position-relative">
            <label for="validationTooltip01" class="form-label">Cod Proveedor:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="NumDocTr" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-2 position-relative">
            <label  for="inputState" class="form-label" name="TipCarTr">Cod Producto:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="TipCarTr" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-2 position-relative">
            <label for="validationTooltip01" class="form-label">Entrada:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="SalariTr" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-2 position-relative">
            <label for="validationTooltip01" class="form-label">Salida:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="SalariTr" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-2 position-relative">
            <label for="validationTooltip01" class="form-label">STOKS:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="SalariTr" required>
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
    <br>
    <br>
    <table>
        <tr>
            <div style="margin-right:13%" class="esp col-3" >
                <button type="submit" name="guardar_trabajador" value="guardar_trabajador" class="btn btn-success">Guardar</button>
            </div>
            <div style="margin-right:12%" class="esp col-3">
                <button class="btn btn-warning" type="reset">Limpiar datos</button>
            </div>
            <div class="esp col-3">
                <a href="../registro_trabajador/consultar_trabajador.php" class="btn btn-primary">Consultar clientes</a>
            </div>
        </tr>
    </table>
</form>
</main>
<?php include("../includes/footer.php")?>