<?php include('../registros/db.php') ?>
<?php include("../includes/head.php") ?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
    <form action="guardar_personas.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
        <h1 style="text-align: center;">REGISTRO DE USUARIO</h1>
        <table>
            <tr>
                <td></td>
                <td style="width: 250px; text-align: center">
                    <p><strong>Crea una cuenta de FacElec</strong></p>
                </td>
                <td></td>
            </tr>
        </table>
        <table>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">TIPO DE DOCUMENTO:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="LogTipDoc" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">NUMERO DE DOCUMENTO:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="LogNumDoc" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">PRIMER NOMBRE:</label>
                <input type="text" class="form-control" id="validationTooltip01" name="LogPriNomPer" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">SEGUNDO NOMBRE:</label>
                <input type="text" class="form-control" id="validationTooltip01" name="LogSegNomPer" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">PRIMER APELLIDO:</label>
                <input type="text" class="form-control" id="validationTooltip01" name="LogPriApePer" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">SEGUNDO APELLIDO:</label>
                <input type="text" class="form-control" id="validationTooltip01" name="LogSegApePer" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="inputState" class="form-label" name="TipoCli">Tipo de Usuario:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="LogTipUsu">
                    <option selected>Seleccionar</option>
                    <option value="1">1. Cliente</option>
                    <option value="2">2. Proveedor</option>
                    <option value="1">1. Trabajador</option>
                    <option value="2">2. Administrador</option>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Por favor seleccion su tipo de documento
                    </div>
                </select>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Dirreccion de Clientes:</label>
                <input type="text" class="form-control" id="validationTooltip01" name="LogDirreCli" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
                <br>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationCustomUsername" class="form-label">CORREO</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="LogPerCor" required>
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
                <input type="text" class="form-control" id="validationTooltip01" name="LogPerCon" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <!--<div class="col-md-6 position-relative">
                        <label for="inputState" class="form-label" name="EstaCli">Estado de Clientes:</label>
                        <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="EstaCli">
                            <option selected>Seleccione su documento</option>
                            <option value="1">1. ACTIVO</option>
                            <option value="2">2. INACTIVO</option>
                            <div id="validationServer04Feedback" class="invalid-feedback">
                                Por favor seleccion su tipo de documento
                            </div>
                        </select>
                    </div>-->
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
                    <button type="submit" name="guardarRegLog" value="guardarRegLog" class="btn btn-success">Guardar</button>
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
<?php include("../includes/footer.php") ?>