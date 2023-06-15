<?php include('db.php')?>
<?php include("../../includes/head.php")?>
<?php
	include("db.php");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "SELECT * FROM personas WHERE PerId = $id";
		$resuleditar = mysqli_query($conn, $query);
		if(mysqli_num_rows($resuleditar) ==1){
			$filas = mysqli_fetch_array($resuleditar);
            $PeTipDoc = $filas['PerTidId'];
            $PeNumDoc = $filas['PerId'];
            $PriNom = $filas['PerNom1'];
            $SegNom = $filas['PerNom2'];
            $PriApe = $filas['PerApe1'];
            $SegApe = $filas['PerApe2'];
            $PerCor = $_POST['PerCor'];
            $PerCon = $_POST['PerCon'];
		}
	}
    if(isset($_POST['actualizar_personas'])){
        $id = $_GET['id'];
        $PeTipDoc = $filas['TipDoc'];
        $PeNumDoc = $filas['NumDoc'];
        $PriNom = $filas['PriNomPer'];
        $SegNom = $filas['SegNomPer'];
        $PriApe = $filas['PriApePer'];
        $SegApe = $filas['SegApePer'];
        $PerCor = $_POST['PerCor'];
        $PerCon = $_POST['PerCon'];
        $query = "UPDATE personas set TipDoc = '$PeTipDoc', PriNomPer = '$PriNom', 
        SegNomPer = '$SegNom', PriApePer = '$PriApe', SegApePer = '$SegApe' $PerCor = 'PerCor', '$PerCon' = 'PerCon' WHERE PerId = $id";
        mysqli_query($conn, $query);
		header("Location: registro_personas.php");
    }
?>
<main class="bg-dark text-light p-5 text-center text-sm-start" >
<form action="guardar.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
<h1 style="text-align: center;">REGISTRO DE USUARIO</h1>
<table>
<tr>
<td></td>
<td style="width: 250px; text-align: center"><p><strong>Crea una cuenta de FacElec</strong></p></td>
<td></td>
</tr>
</table>
<table>
<div class="col-md-6 position-relative">
<label for="validationTooltip01" class="form-label">TIPO DE DOCUMENTO:</label>
<input type="number" class="form-control" id="validationTooltip01" name="TipDoc" required value="<?php echo $PeTipDoc?>">
<div class="valid-tooltip">
Documento valido...!
</div>
<div class="invalid-tooltip">
Documento no valido.
</div>
</div>
<div class="col-md-6 position-relative">
<label for="validationTooltip01" class="form-label">NUMERO DE DOCUMENTO:</label>
<input type="number" class="form-control" id="validationTooltip01" name="NumDoc" required value="<?php echo $PeNumDoc?>">
<div class="valid-tooltip">
Documento valido...!
</div>
<div class="invalid-tooltip">
Documento no valido.
</div>
</div>
<div class="col-md-6 position-relative">
<label for="validationTooltip01" class="form-label">PRIMER NOMBRE:</label>
<input type="text" class="form-control" id="validationTooltip01" name="PriNomPer" required value="<?php echo $PriNom?>">
<div class="valid-tooltip">
Documento valido...!
</div>
<div class="invalid-tooltip">
Documento no valido.
</div>
</div>
<div class="col-md-6 position-relative">
<label for="validationTooltip01" class="form-label">SEGUNDO NOMBRE:</label>
<input type="text" class="form-control" id="validationTooltip01" name="SegNomPer" required value="<?php echo $SegApe?>">
<div class="valid-tooltip">
Documento valido...!
</div>
<div class="invalid-tooltip">
Documento no valido.
</div>
</div>
<div class="col-md-6 position-relative">
<label for="validationTooltip01" class="form-label">PRIMER APELLIDO:</label>
<input type="text" class="form-control" id="validationTooltip01" name="PriApePer" required value="<?php echo $PriApe?>">
<div class="valid-tooltip">
Documento valido...!
</div>
<div class="invalid-tooltip">
Documento no valido.
</div>
</div>
<div class="col-md-6 position-relative">
<label for="validationTooltip01" class="form-label">SEGUNDO APELLIDO:</label>
<input type="text" class="form-control" id="validationTooltip01" name="SegApePer" required value="<?php echo $SegApe?>">
<div class="valid-tooltip">
Documento valido...!
</div>
<div class="invalid-tooltip">
Documento no valido.
</div>
</div><div class="col-md-6 position-relative">
<label for="validationCustomUsername" class="form-label">CORREO</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="PerCor" required value="<?php echo $PerCor?>">
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
<input type="text" class="form-control" id="validationTooltip01" name="PerCon" required value="<?php echo $PerCon?>">
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
        <tr>
            <td>
                <button type="submit" name="actualizar_personas" value="actualizar_personas" class="btn btn-success"><label for="">Actualizar</label></button>           
            </td>
        </tr>
    </table>
<table>
<br>
</table>
</form>
</main> 
<?php include("../includes/footer.php")?>
</body>
</html>