<?php include('../db.php')?>
<?php include("../../includes/head.php")?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
<a href="../../../../proyectoFinalFacturacion/vistas/registros/registro_trabajador/registro_trabajador.php" class="btn btn-primary">Regresar</a>
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
    <div class="col-md-6 position-relative">
        <br>
        <label for="inputState" class="form-label" name="TipCarTr">TIPO DE DOCUMENTO:</label>
        <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="TipDocTr">
          <option selected>Seleccione el tipo de documento</option>
          <option value="1">1. CEDULA DE CIUDADANIA</option>
          <option value="2">2. DOCUMENTO DE IDENTIDAD</option>
          <option value="3">3. CEDULA DE EXTRANJERIA</option>
          <div id="validationServer04Feedback" class="invalid-feedback">
            Seleccione el tipo de cargo
          </div>
        </select>
      </div>
        <div class="col-md-6 position-relative">
            <br>
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
            <label  for="inputState" class="form-label" name="TipCarTr">Tipo Usuario:</label>
            <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required  name="TipCarTr">
            <option selected>Seleccione el tipo de cargo</option>
            <option value="1">1. Cliente</option>
            <option value="2">2. Proveedores</option>
            <option value="3">3. Trabajador</option>
            <div id="validationServer04Feedback" class="invalid-feedback">
                Seleccione el tipo de cargo
            </div>
            </select>
        </div>
        <div class="col-md-6 position-relative">
        <label for="validationTooltip01" class="form-label">PRIMER NOMBRE:</label>
        <input type="text" class="form-control" id="validationTooltip01" name="PriNomTr" required>
        <div class="valid-tooltip">
          Documento valido...!
        </div>
        <div class="invalid-tooltip">
          Documento no valido.
        </div>
      </div>
      <div class="col-md-6 position-relative">
        <label for="validationTooltip01" class="form-label">SEGUNDO NOMBRE:</label>
        <input type="text" class="form-control" id="validationTooltip01" name="SegNomTr" required>
        <div class="valid-tooltip">
          Documento valido...!
        </div>
        <div class="invalid-tooltip">
          Documento no valido.
        </div>
      </div>
      <div class="col-md-6 position-relative">
        <label for="validationTooltip01" class="form-label">PRIMER APELLIDO:</label>
        <input type="text" class="form-control" id="validationTooltip01" name="PriApeTr" required>
        <div class="valid-tooltip">
          Documento valido...!
        </div>
        <div class="invalid-tooltip">
          Documento no valido.
        </div>
      </div>
      <div class="col-md-6 position-relative">
        <label for="validationTooltip01" class="form-label">SEGUNDO APELLIDO:</label>
        <input type="text" class="form-control" id="validationTooltip01" name="SegApeTr" required>
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
        <label for="validationCustomUsername" class="form-label">CORREO</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="CorrTra" required>
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
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Contraseña:</label>
            <input type="text" class="form-control" id="validationTooltip01" name="ConTra" required>
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
                <a href="../registro_trabajador/consultar_trabajador.php" class="btn btn-primary">Consultar clientes</a>
            </div>
        </tr>
    </table>
</form>
</main>
<?php include("../../includes/footer.php")?>