<?php include('../db.php')?>
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
<a href="../../../login/registros/registro_trabajador/reg_tra.php" class="btn btn-primary">Regresar</a>
<form action="../registro_trabajador/guardar_trabajador.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
    <h1 style="text-align: center;">REGISTRO DE TRABAJADOR</h1>
    <table>
      <tr>
        <td></td>
        <td style="width: 250px; text-align: center">
          <p><strong>Crea una cuenta de FacElec</strong></p>
          <a href="../../../../proyectoFinalFacturacion/vistas/login/logintra.php">Ya tienes cuenta?</a>
        </td>
        <td></td>
      </tr>
    </table>
    <br>
    <table>
    <div class="col-md-12 position-relative">
            <label  for="inputState" class="form-label" name="TipCarTr">Tipo Usuario:</label>
            <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required  name="TipCarTr">
            <option selected>Seleccione el tipo de cargo</option>
            <option value="1">1. Administrador</option>
            <option value="2">2. Gerente</option>
            <option value="3">3. Vendedor</option>
            <div id="validationServer04Feedback" class="invalid-feedback">
                Seleccione el tipo de cargo
            </div>
            </select>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Numero de Documento:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="NumDocTr" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Horas Laborales:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="HorLabTr" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Salario:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="SalariTr" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
                <label for="validationCustomUsername" class="form-label">FECHA</label>
                <?php
                date_default_timezone_set('America/Bogota');
                $fecha_actual = date("y-m-d H:i:s");
                ?>
                <input type="datetime" class="form-control" id="validationTooltip01" name="FechTr" placeholder="Ingrese Fecha" required value="<?= $fecha_actual ?>">
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
                <button type="submit" name="guardar_trabajador" value="guardar_trabajador" class="btn btn-success">Guardar</button>
            </div>
            <div style="margin-right:12%" class="esp col-3">
                <button class="btn btn-warning" type="reset">Limpiar datos</button>
            </div>
            <div class="esp col-3">
                <a href="../../../login/registros/registro_trabajador/consultar_trabajador.php" class="btn btn-primary">Consultar clientes</a>
            </div>
        </tr>
    </table>
</form>
</main>
<?php include("../../includes/footer.php")?>