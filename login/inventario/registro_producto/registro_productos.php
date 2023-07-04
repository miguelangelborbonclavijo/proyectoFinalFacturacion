<?php
    session_start();
    include('../../../login/db.php');
?>
<?php 
    if(!isset($_SESSION['usuario'])){
        header("Location: ../../login/principal.php");
    } ?>
<?php  include('../../../login/includes/head.php'); 
    $nombre = $_SESSION['nombre'];	

    echo $nombre;?>
<button><a href="../../../login/salir.php">Salir</a></button><br>
<main class="bg-dark text-light p-5 text-center text-sm-start">
<a href="../../../login/inventario/ele_crepro.php" class="btn btn-primary">Regresar</a>
    <form action="../registro_producto/guardar_producto.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
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
                <input type="number" class="form-control" id="validationTooltip01" name="TipPro" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-12 position-relative">
                <label for="validationTooltip01" class="form-label">DESCRIPCION:</label>
                <input type="text" class="form-control" id="validationTooltip01" name="DesPro" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">PRECIO DE COMPRA:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="PreCom" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">PRECIO DE VENTA:</label>
                <input type="numbar" class="form-control" id="validationTooltip01" name="PreVent" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <br>
            <br>
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
                    <div style="margin-right: 12%"  class="esp col-3" >
                        <button type="submit" name="guardar_producto" value="guardar_producto" class="btn btn-success">Guardar</button>
                    </div>
                    <div style="margin-right: 13%"  class="esp col-3">
                        <button class="btn btn-warning" type="reset">Limpiar datos</button>
                    </div>
                    <div  class="esp col-3">
                        <a href="../registro_producto/consultar_productos.php" class="btn btn-primary">Consultar Producto</a>
                    </div>
                </tr>
            </table>
        </table>
    </form>
</main>
<main tyle="margin-top:30;">
    <div class="container-lg">
        <table class="table">
            <thead>
                <tr>
                    <br>
                    <h1 style="text-align: center;">TIPO DE PRODUCTOS</h1>
                    <br>
                </tr>
                <tr style="text-align: center;">
                    <th>CODIGO</th>
                    <th>TIPO DE PRODUCTO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM tipodeproducto";
                $resulproductos = mysqli_query($conn, $query);
                while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                    <tr style="text-align: center;">
                        <td><?php echo $filas['TipId'] ?></td>
                        <td><?php echo $filas['TipNom'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>
<?php include("../../includes/footer.php") ?>