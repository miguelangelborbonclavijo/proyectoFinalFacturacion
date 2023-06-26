<?php include('../db.php') ?>
<?php include("../../includes/head.php") ?>
<main class="bg-dark text-light p-5 text-center text-sm-start">
    <form action="../registro_soporte/guardar_soporte.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
        <h1 style="text-align: center;">Formulario de Soporte</h1>
        <hr>
        <table>
            <tr>
                <td></td>
                <td style="width: 200px; text-align: center">
                    <p><strong>DATOS DEL USUARIO</strong></p>
                </td>
                <td></td>
            </tr>
        </table>
        <table>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Numero de Documento:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="NumDocSop" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="inputState" class="form-label" name="TipCliSop">Tipo de clientes:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="TipCliSop">
                    <option selected>Seleccione el tipo de cliente</option>
                    <option value="1">1. BASICO</option>
                    <option value="2">2. PREMIUM</option>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Seleccione el tipo de cargo
                    </div>
                </select>
            </div>
            <div class="col-md-12 position-relative">
                <label for="validationTooltip01" class="form-label">DESCRIPCIÓN:</label>
                <input type="text" class="form-control" id="validationTooltip01" name="DesSop" required>
                <div class="valid-tooltip">
                    Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="inputState" class="form-label" name="TipSopor">Tipo de soporte:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required name="TipSopor">
                    <option selected>Seleccione el tipo de soporte</option>
                    <option value="1">1. SOPORTE TECNICO</option>
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Seleccione el tipo de cargo
                    </div>
                </select>
            </div>

            <div class="col-md-6 position-relative">
                <label for="validationCustomUsername" class="form-label">FECHA</label>
                <?php
                date_default_timezone_set('America/Bogota');
                $fecha_actual = date("y-m-d H:i:s");
                ?>
                <input type="datetime" class="form-control" id="validationTooltip01" name="FechSop" placeholder="Ingrese Fecha" required value="<?= $fecha_actual ?>">
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
                    <div style="margin-right:12%" class="esp col-3">
                        <button type="submit" name="guardar_soporte" value="guardar_soporte" class="btn btn-success">Guardar</button>
                    </div>
                    <div style="margin-right:13%" class="esp col-3">
                        <button class="btn btn-warning" type="reset">Limpiar datos</button>
                    </div>
                    <div class="esp col-3">
                        <a href="../registro_soporte/consultar_soporte.php" class="btn btn-primary">Consultar personas</a>
                    </div>
                </tr>
            </table>
        </table>
    </form>
</main>
<div class="container-xxl">
        <table class="table">
            <thead>
                <tr>
                    <br>
                    <h1 style="text-align: center;">REGISTRO DE SOPORTES</h1>
                    <br>
                </tr>
                <tr style="text-align: center;">
                    <th>NUMERO DE DOCUMENTO</th>
                    <th>TIPO DE CLIENTE</th>
                    <th>TIPO DE SOPORTE</th>
                    <th>ESTADO DE SOPORTE</th>
                    <th>FECHA DE SOPORTE</th>
                    <th>DESCRIPCION</th>
                    <th>ESTADOS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM soporte";
                $resulproductos = mysqli_query($conn, $query);
                while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                    <tr style="text-align: center;">
                        <td><?php echo $filas['SopDoCl'] ?></td>
                        <td><?php echo $filas['SopTiCl'] ?></td>
                        <td><?php echo $filas['SopTiS'] ?></td>
                        <td><?php echo $filas['SopEstId'] ?></td>
                        <td><?php echo $filas['SopFe'] ?></td>
                        <td><?php echo $filas['SopDesc'] ?></td>
                        <td>
                            <a href="../../../../proyectoFinalFacturacion/vistas/registros/registro_soporte/editar_soporte.php ?id=<?php echo $filas['SopoId'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-success bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <br>
<?php include("../../includes/footer.php") ?>