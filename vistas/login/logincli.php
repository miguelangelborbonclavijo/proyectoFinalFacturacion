<?php session_start(); ?>
<?php include('../registros/db.php') ?>
<?php include("../includes/head.php") ?>
<?php
if (isset($_POST['login_clientes'])) {
    $usuario = $_POST['NumDocCli'];
    $contrasena = $_POST['ConCli'];
    $query = "SELECT CliPerId,CliCon FROM clientes WHERE CliPerId = '$usuario'";
    $resul = mysqli_query($conn, $query);
    $num = $resul->num_rows;
    if ($num > 0) {
        $row = $resul->fetch_assoc();
        $contrasena_bd = $row['CliCon'];
        $con_c = $contrasena;
        if ($contrasena_bd == $con_c) {
            $_SESSION['NumDocCli'] = $row['CliPerId'];
            $_SESSION['ConCli'] = $row['CliCon'];
            echo "se logor hijueputa";
            header("Location: ../../../../proyectoFinalFacturacion/vistas/inicio_usuarios/homecli.php");
        } else {
            echo "";
           
        }
    }
}
?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
        <h1 style="text-align: center;">REGISTRO DE USUARIO</h1>
        <table>
            <tr>
                <td></td>
                <td style="width: 250px; text-align: center">
                    <p><strong>Crea una cuenta de FacElec</strong></p>
                    <a href="../tabajadores/registrar.php">Ya te registraste?</a>
                </td>
                <td></td>
            </tr>
        </table>
        <br>
        <table>
            <div class="col-md-6 position-relative">
                <br>
                <label for="validationTooltip01" class="form-label">NUMERO DE DOCUMENTO:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="NumDocCli" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <br>
                <label for="validationTooltip01" class="form-label">CONTRASEÑA:</label>
                <input type="text" class="form-control" id="validationTooltip01" name="ConCli" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
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
                        <div style="margin-right: 13%" class="esp col-3">
                            <button type="submit" name="login_clientes" value="login_clientes" class="btn btn-success">Guardar</button>
                        </div>
                        <div style="margin-right:12%" class="esp col-3">
                            <button class="btn btn-warning" type="reset">Limpiar datos</button>
                        </div>
                        <div class="esp col-3">
                            <a href="../registro_persona/consultar_personas.php" class="btn btn-primary">Consultar personas</a>
                        </div>
                    </tr>
                </table>
            </table>
    </form>
</main>
<?php include("../includes/footer.php") ?>