<?php
    session_start();
    if(!isset($_SESSION['id'])){
    }
    $nombre = $_SESSION['nombre'];	
    include("../../includes/head.php");
    echo $nombre;
?>
<?php include('../db.php') ?>
<button><a href="../../../login/salir.php.">Salir</a></button>
<?php
	include("../../db.php");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "SELECT * FROM clientes WHERE CliPerId = $id";
		$resuleditar = mysqli_query($conn, $query);
		if(mysqli_num_rows($resuleditar) ==1){
			$filas = mysqli_fetch_array($resuleditar);
            $NumDocCli = $filas['CliPerId'];
            $TipoCli = $filas['CilTipId'];
            $EstadoCli = $filas['CliEsId'];
            $DirreCli = $filas['CliDirr'];
            
		}
	}
    if(isset($_POST['actualizar_clientes'])){
        $id = $_GET['id'];
        $NumDocCli = $_POST['NumDocuCli'];
        $TipoCli = $_POST['TipoCli'];
        $EstadoCli = $_POST['EstaCli'];
        $DirreCli = $_POST['DirreCli'];
        $query = "UPDATE clientes set CliPerId = '$NumDocCli', CilTipId = '$TipoCli', CliEsId = '$EstadoCli', CliDirr = '$DirreCli' WHERE  CliPerId = $id";
        mysqli_query($conn, $query);
		header("Location: ../../../../../login/registros/registro_clientes/registro_clientes.php");
    }
?>
<br>
<a href="../../../login/registros/registro_clientes/registro_clientes.php" class="btn btn-primary">Regresar</a>
<form action="editar_clientes.php?id=<?php echo $_GET['id']; ?>" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
        <h1 style="text-align: center;">ACTUALIZAR CLIENTES</h1>
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
                <input type="number" class="form-control" id="validationTooltip01" name="NumDocuCli" required value="<?php echo $NumDocCli ?>">
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label style="width:2000%" for="inputState" class="form-label" name="TipoCli">Tipo de cliente:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="TipoCli" value="<?php echo $TipoCli ?>">
                    <option selected>Seleccione su documento</option>
                    <option value="1">1. BASICO</option>
                    <option value="2">2. PREMIU</option>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Por favor seleccion su tipo de documento
                    </div>
                </select>
            </div>
            <div class="col-md-6 position-relative">
                <label style="width:2000%" for="inputState" class="form-label" name="EstaCli">Estado de Clientes:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="EstaCli" value="<?php echo $EstadoCli ?>">
                    <option selected>Seleccione su documento</option>
                    <option value="1">1. ACTIVO</option>
                    <option value="2">2. INACTIVO</option>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Por favor seleccion su tipo de documento
                    </div>
                </select>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Dirreccion de Clientes:</label>
                <input type="text" class="form-control" id="validationTooltip01" name="DirreCli" required value="<?php echo $DirreCli ?>">
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
                    <button type="submit" name="actualizar_clientes" value="actualizar_clientes" class="btn btn-success">Guardar</button>
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
<?php include("../../includes/footer.php")?>
</body>
</html>