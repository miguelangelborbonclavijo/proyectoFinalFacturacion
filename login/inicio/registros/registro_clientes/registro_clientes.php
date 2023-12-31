<?php
    session_start();
    if(!isset($_SESSION['id'])){
    }
    $nombre = $_SESSION['nombre'];	
    include("../../includes/head.php");
    echo $nombre;
?>
<?php include('../db.php') ?>
<button><a href="../../../login/salir.php">Salir</a></button>
<main class="bg-dark text-light p-5 text-center text-sm-start">
<a href="../../../login/registros/reg_cli.php" class="btn btn-primary">Regresar</a>
    <form action="guardar_clientes.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
        <h1 style="text-align: center;">REGISTRO DE CLIENTES</h1>
        <hr>
        <table>
            <tr>
                <td></td>
                <td style="width: 200px; text-align: center">
                    <p><strong>DATOS DEL CLIENTE</strong></p>
                </td>
                <td></td>
            </tr>
        </table>
        <table>
            <br>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Numero de Documento:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="NumDocuCli" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Dirreccion de Clientes:</label>
                <input type="text" class="form-control" id="validationTooltip01" name="DirreCli" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
                <br>
            </div>
            <br>
            <tr>
                <td>
                    <label for="cbox2" class="text-center">Señor usuario asegurese que los datos digitados estan correctos.</label>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <table>
            <tr>
                <div style="margin-right: 12%" class="esp col-3">
                    <button type="submit" name="guardar_clientes" value="guardar_clientes" class="btn btn-success">Guardar</button>
                </div>
                <div style="margin-right:13%" class="esp col-3">
                    <button class="btn btn-warning" type="reset">Limpiar datos</button>
                </div>
                <div class="esp col-3">
                    <a href="../registro_clientes/consultar_clientes.php" class="btn btn-primary">Consultar clientes</a>
                </div>
            </tr>
        </table>
    </form>
</main>
<?php include("../../includes/footer.php") ?>