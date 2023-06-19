<?php include('db.php')?>
<?php include("../includes/head.php")?>
    <form action="guardar_producto.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
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
        <div class="col-md-12 position-relative">
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
            <div class="esp col-6" >
                <button type="submit" name="guardar_proveedores" value="guardar_proveedores" class="btn btn-success">Guardar</button>
            </div>
            <div class="esp col-6">
                <button class="btn btn-warning" type="reset">Limpiar datos</button>
            </div>
        </tr>
        </table>
    </table>
    </form>
    <hr>
    <div class="container-lg">
            <table class="table">
            <thead>
                <tr>
                    <h1 style="text-align: center;">REGISTRADOS PROVEEDORES</h1>
                    <br>
                </tr>
                <tr style="text-align: center;">
                    <th scope="col">NIP PROVEEROR</th>
                    <th scope="col">NOMBRE DEL PROVEEDOR</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">ESTADOS</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        $query = "SELECT * FROM proveedores";
                        $resulproductos = mysqli_query($conn, $query);
                        while($filas = mysqli_fetch_array($resulproductos)){?>
                            <tr  style="text-align: center;">
                                <td><?php echo $filas['PrId'] ?></td>
                                <td><?php echo $filas['PrNomPr'] ?></td>
                                <td><?php echo $filas['PrDirr'] ?></td>
                                <td>
                                    <a href="editar_proveedores.php?id=<?php echo $filas['PrId']?>">Editar</a>
                                    <a href="eliminar_productos.php?id=<?php echo $filas['PrId']?>">Eliminar</a>
                                </td>
                            </tr>
                    <?php } ?> 
                </tbody> 
            </tbody>
        </table>
    </div>
    <br>
<?php include("../includes/footer.php")?>
</body>
</html>
