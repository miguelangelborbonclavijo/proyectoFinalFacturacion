<?php include('../../registros/db.php') ?>
<?php include("../../includes/head.php") ?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
    <form action="../registro_tipo_productos/guardar_tipo_producto.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
        <table>
            <h1 style="text-align: center;">REGISTRO DE PRODUCTOS</h1>
            <hr>
            <table>
                <tr>
                    <td></td>
                    <td style="width: 200px; text-align: center">
                        <p><strong>DATOS DEL PRODUCTO</strong></p>
                    </td>
                    <td></td>
                </tr>
            </table>
            <table>
                <div class="col-md-12 position-relative">
                    <label for="validationTooltip01" class="form-label">TIPO DE PRODUCTO:</label>
                    <input type="text" class="form-control" id="validationTooltip01" name="TipNomPro" required>
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
                        <button type="submit" name="guardar_tipProducto" value="guardar_tipProducto" class="btn btn-success">Guardar</button>
                    </div>
                    <div style="margin-right:10%" class="esp col-3">
                        <button class="btn btn-warning" type="reset">Limpiar datos</button>
                    </div>
                    <div class="esp col-3">
                        <a href="../registro_tipo_productos/consultar_tipo_producto.php" class="btn btn-primary">Consultar Tipo Producto</a>
                    </div>
                </tr>
            </table>
    </form>
</main>
<?php include("../../includes/footer.php") ?>