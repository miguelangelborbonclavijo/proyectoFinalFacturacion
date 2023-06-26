<?php include('../../registros/db.php') ?>
<?php include("../../includes/head.php") ?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
<a href="../../../../proyectoFinalFacturacion/vistas/Trabajadores/ventas/ele_venta.php" class="btn btn-primary">Regresar</a>
    <form action="../ventas/guardas_venta.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
        <h1 style="text-align: center;">REGISTRO DE VENTAS</h1>
        <table>
            <tr>
                <td></td>
                <td style="width: 200px; text-align: center">
                    <p><strong>DATOS DE VENTA</strong></p>
                </td>
                <td></td>
            </tr>
        </table>
        <br>
        <table>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Codigo Clientes:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="SalCodCl" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Codigo venta:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="SalCodVe" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Codigo Trabajador:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="SalCodTr" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="inputState" class="form-label">Codigo del Producto:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="SalCodPr" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Cantidad:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="SalCan" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Valor:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="SalVal" required>
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
                    <div style="margin-right:13%" class="esp col-3">
                        <button type="submit" name="guardar_salida" value="guardar_salida" class="btn btn-success">Guardar</button>
                    </div>
                    <div style="margin-right:12%" class="esp col-3">
                        <button class="btn btn-warning" type="reset">Limpiar datos</button>
                    </div>
                    <div class="esp col-3">
                        <a href="../inventario/consultar_entradas.php" class="btn btn-primary">Consultar clientes</a>
                    </div>
                </tr>
            </table>
        </table>
    </form>
</main>
<?php include("../../includes/footer.php") ?>