<?php include('../../vistas/registros/db.php') ?>
<?php include("../../../proyectoFinalFacturacion/vistas/includes/head.php") ?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
    <form action="../../login/tabajadores/guardar.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
        <h1 style="text-align: center;">REGISTRO DE USUARIO</h1>
        <table>
            <tr>
                <td></td>
                <td style="width: 250px; text-align: center">
                    <p><strong>Crea una cuenta de FacElec</strong></p>
                    <a href="../../../proyectoFinalFacturacion/vistas/login/logintra.php">Ya tienes cuenta?</a>
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
                <label for="validationTooltip01" class="form-label">NUMERO DE DOCUMENTO:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="NumDocTr" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
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
                <label for="validationCustomUsername" class="form-label">TELEFONO</label>
                <div class="input-group has-validation">
                    <input type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="NumTelTr" required>
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
                <label for="inputState" class="form-label" name="TipCarTr">ESTADO DEL TRABAJADOR:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="EstTr">
                    <option selected>Seleccione el estado el tabajador</option>
                    <option value="2">1. ACTIVO</option>
                    <option value="1">2. INACTIVO</option>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Seleccione el tipo de cargo
                    </div>
                </select>
            </div>
            <div class="col-md-6 position-relative">
                <label for="inputState" class="form-label" name="TipCarTr">Tipo de cargo:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="TipCarTr">
                    <option selected>Seleccione el tipo de cargo</option>
                    <option value="1">1. Vendedor</option>
                    <option value="2">2. Contador</option>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Seleccione el tipo de cargo
                    </div>
                </select>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationCustomUsername" class="form-label">SALARIO</label>
                <div class="input-group has-validation">
                    <input type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="SalTr" required>
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
                <label for="validationCustomUsername" class="form-label">CORREO</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="CorrTr" required>
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
                <label for="validationTooltip01" class="form-label">CONTRASEÑA:</label>
                <input type="text" class="form-control" id="validationTooltip01" name="ConTr" required>
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
                            <button type="submit" name="guardar_trabajadores" value="guardar_trabajadores" class="btn btn-success">Guardar</button>
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
<?php include("../../../proyectoFinalFacturacion/vistas/includes/footer.php") ?>
</body>

</html>