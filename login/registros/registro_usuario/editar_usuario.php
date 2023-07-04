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
<?php include('../db.php') ?>
<?php
include("../../db.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM usuarios WHERE UsuId = $id";
    $resuleditar = mysqli_query($conn, $query);
    if (mysqli_num_rows($resuleditar) == 1) {
        $filas = mysqli_fetch_array($resuleditar);
        $Usu = $filas['usuario'];
        $ConUsu = $filas['contrasena'];
        $NomUsu = $filas['nombre'];
        $TipoUsu = $filas['tipo_usuario'];
    }
}
if (isset($_POST['actualizar_usu'])) {
    $id = $_GET['id'];
    $NumDocUsu = $_POST['NumDocUsu'];
    $ConUsu = $_POST['ConUsu'];
    $NomUsu = $_POST['NomUsu'];
    $tipUsu = $_POST['TipUsu'];
    $query = "UPDATE usuarios set usuario = '$NumDocUsu', contrasena = '$ConUsu', nombre = '$NomUsu', tipo_usuario = '$tipUsu' WHERE UsuId = $id";
    mysqli_query($conn, $query);
}
?>
<main class="p-5 text-center text-sm-start">
    <a href="../../../login/registros/registro_usuario/consultar_usuario.php" class="btn btn-primary">Regresar</a>
            <form action="../../registros/registro_usuario/editar_usuario.php?id=<?php echo $_GET['id']; ?>" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
                <h1 style="text-align: center;">REGISTRO DE USUARIO</h1>
                <table>
                    <tr>
                        <td></td>
                        <td style="width: 250px; text-align: center">
                            <p><strong>Crea una cuenta de FacElec</strong></p>
                            <a href="../../../../proyectoFinalFacturacion/vistas/login/logincli.php">Ya tienes cuenta?</a>
                        </td>
                        <td></td>
                    </tr>
                </table>
                <table>
                    <div class="col-md-12 position-relative">
                        <br>
                        <label for="inputState" class="form-label" name="TipCarTr">TIPO DE USUARIO:</label>
                        <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="TipUsu" value="<?php echo $TipUsu ?>">
                            <option selected required>Seleccione el tipo de usuario</option>
                            <option value="1" required>1. CLIENTES</option>
                            <option value="2" required>2. PROVEEDORES</option>
                            <option value="3" required>3. TRABAJADORES</option>
                            <option value="3" required>4. Administrador</option>
                            <div id="validationServer04Feedback" class="invalid-feedback" required>
                                Seleccione el tipo de cargo
                            </div>
                        </select>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">NUMERO DE DOCUMENTO:</label>
                        <input type="number" class="form-control" id="validationTooltip01" name="NumDocUsu" required value="<?php echo $Usu ?>">
                        <div class="valid-tooltip">
                            Documento valido...!
                        </div>
                        <div class="invalid-tooltip">
                            Documento no valido.
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">CONTRASEÑA:</label>
                        <input type="password" class="form-control" id="validationTooltip01" name="ConUsu" required>
                        <div class="valid-tooltip">
                            Documento valido...!
                        </div>
                        <div class="invalid-tooltip">
                            Documento no valido.
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">NOMBRE DEL USUARIO:</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="NomUsu" required value="<?php echo $NomUsu ?>">
                        <div class="valid-tooltip">
                            Documento valido...!
                        </div>
                        <div class="invalid-tooltip">
                            Documento no valido.
                        </div>
                    </div>
                    <table>
                        <tr>
                            <td>
                                <label for="cbox2">Señor usuario asegurese que los datos digitados estan correctos.</label>
                                <br>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td>
                                <button type="submit" name="actualizar_usu" value="actualizar_usu" class="btn btn-success"><label for="">Actualizar</label></button>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <br>
                    </table>
            </form>
</main>
<?php include("../../includes/footer.php") ?>
</body>

</html>