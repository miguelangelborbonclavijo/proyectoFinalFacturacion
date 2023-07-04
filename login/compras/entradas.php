<?php
    session_start();
    include('../../login/db.php');
?>
<?php 
    if(!isset($_SESSION['usuario'])){
        header("Location: ../../login/principal.php");
    } ?>
<?php  include('../../login/includes/head.php'); 
    $nombre = $_SESSION['nombre'];	

    echo $nombre;?>
<button><a href="../../login/salir.php">Salir</a></button><br>  
<main class="bg-dark text-light p-5 text-center text-sm-start">
<a href="../../login/compras/tip_compras.php" class="btn btn-primary">Regresar</a>
<form action="../compras/guardar_entrada.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
    <h1 style="text-align: center;">REGISTRO DE COMPRAS</h1>
    <table>
        <tr>
            <td></td>
            <td style="width: 200px; text-align: center"><p><strong>DATOS DE COMPRA</strong></p></td>
            <td></td>
        </tr>
    </table>
    <br>
    <table>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Codigo Proveedor:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="CodProve" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label  for="inputState" class="form-label">Codigo del Producto:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="CodProd" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
            
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">CODIGO TRABAJADOR:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="TraId" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">Cantidad:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="Can" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-4 position-relative">
        <label for="validationCustomUsername" class="form-label">FECHA</label>
        <?php
        date_default_timezone_set('America/Bogota');
        $fecha_actual = date("y-m-d H:i:s");
        ?>
        <input type="datetime" class="form-control" id="validationTooltip01" name="FechCli" placeholder="Ingrese Fecha" required value="<?= $fecha_actual ?>">
        <div class="input-group has-validation">
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
        <div class="col-md-6 position-relative">
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
                <button type="submit" name="guardar_inventario_entrada" value="guardar_inventario_entrada" class="btn btn-success">Guardar</button>
            </div>
            <div style="margin-right:12%" class="esp col-3">
                <button class="btn btn-warning" type="reset">Limpiar datos</button>
            </div>
            <div class="esp col-3">
                <a href="../../login/compras/consultar_entradas.php " class="btn btn-primary">Consultar Compras</a>
            </div>
        </tr>
    </table>
</form>
</main>
<table>
    <tr>
        <td><main tyle="margin-top:30px;">
    <div class="container-lg">
        <table class="table">
            <thead>
                <tr>
                    <br>
                    <h1 style="text-align: center;">REGISTRADOS PROVEEDORES</h1>
                </tr>
                <tr style="text-align: center;">
                    <th scope="col">NIP PROVEEROR</th>
                    <th scope="col">NOMBRE DEL PROVEEDOR</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">NUMERO DE CELULAR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM proveedores";
                $resulproductos = mysqli_query($conn, $query);
                while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                    <tr style="text-align: center;">
                        <td><?php echo $filas['PrId'] ?></td>
                        <td><?php echo $filas['PrNomPr'] ?></td>
                        <td><?php echo $filas['PrDirr'] ?></td>
                        <td><?php echo $filas['PrCel'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            </tbody>
        </table>
    </div>
</main></td>
        <td><main style="margin-top:30px;">
    <div class="container-lg">
        <table class="table">
            <thead>
                <tr>
                    <h1 style="text-align: center;">PRODUCTOS REGISTRADOS</h1>
                </tr>
                <tr style="text-align: center;">
                    <th scope="col">CODIGO PRODUCTO</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">PRECIO DE COMPRA</th>
                    <th scope="col">PRECIO DE VENTA</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM productos";
                $resulproductos = mysqli_query($conn, $query);
                while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                    <tr style="text-align: center;">
                        <td><?php echo $filas['ProId'] ?></td>
                        <td><?php echo $filas['ProDes'] ?></td>
                        <td><?php echo $filas['ProPreCo'] ?></td>
                        <td><?php echo $filas['ProPreVe'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            </tbody>
        </table>
    </div>
</main></td>
<td>
<main class="p-5 text-center text-sm-start">
<a href="../../../login/registros/registro_trabajador/registro_trabajador.php" class="btn btn-primary">Regresar</a>
    <div class="container-lg">
        <table class="table">
            <thead>
                <tr>
                    <h1 style="text-align: center;">TRABAJADORES REGISTRADOS</h1>
                    <br>
                </tr>
                <tr style="text-align: center;">
                    <th scope="col">CODIGO TRABAJADOR</th>
                    <th scope="col">NUMERO DE DOCUMENTO</th>
                    <th scope="col">TIPO DE CARGO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM trabajadores";
                $resulproductos = mysqli_query($conn, $query);
                while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                    <tr style="text-align: center;">
                        <td><?php echo $filas['TraId']?></td>
                        <td><?php echo $filas['TraPerId'] ?></td>
                        <td><?php echo $filas['TraCarId'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            </tbody>
        </table>
    </div>
</main>
</td>
    </tr>
</table>
<?php include("../includes/footer.php")?>