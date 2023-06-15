<?php include("../../includes/head.php")?>
<main style="margin-top:50px;">
<form action="guardar_producto.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
<table>
<h1 style="text-align: center;">REGISTRO DE PRODUCTOS</h1>
<hr>
<table>
<tr>
<td></td>
<td style="width: 200px; text-align: center"><p><strong>DATOS DEL PRODUCTO</strong></p></td>
<td></td>
</tr>
</table>
<table>
<div class="col-md-12 position-relative">
<label for="validationTooltip01" class="form-label">TIPO DE PRODUCTO:</label>
<input type="text" class="form-control" id="validationTooltip01" name="TipNomPro" required>
<div class="valid-tooltip">
Documento valido...!
</div>
<div class="invalid-tooltip">
Documento no valido.
</div>
</div>
</table>
<br>
<table>
<tr>
<td>
<label for="cbox2">Señor usuario asegurese que los datos digitados estan correctos.</label>
</td>
</tr>
</table>
<br>
<table>
<tr>
<div class="esp col-6" >
<button type="submit" name="guardar_tipProducto" value="guardar_tipProducto" class="btn btn-success">Guardar</button>
</div>
<div class="esp col-6">
<button class="btn btn-warning" type="reset">Limpiar datos</button>
</div>
</tr>
</table>
</form>
<br><hr><br>
<div class="container-lg">
<table class="table">
<thead>
<tr>
<h1 style="text-align: center;">TIPO DE PRODUCTOS</h1>
</tr>
<tr style="text-align: center;" >
<th>CODIGO</th>
<th>TIPO DE PRODUCTO</th>
<th>ESTADO</th>
</tr>
</thead>
<tbody>
<?php
$query = "SELECT * FROM tipodeproducto";
$resulproductos = mysqli_query($conn, $query);
while($filas = mysqli_fetch_array($resulproductos)){?>
<tr style="text-align: center;">
<td><?php echo $filas['TipId'] ?></td>
<td><?php echo $filas['TipNom'] ?></td>
<td>
<a href="editar_tipo_producto.php?id=<?php echo $filas['TipId']?>">Editar</a>
<a href="eliminar_productos.php?id=<?php echo $filas['TipId']?>">Eliminar</a>
</td>
</tr>
<?php } ?> 
</tbody>
</table>
</div>
<br>
<?php include("../includes/footer.php")?>
</body>
</html>
</main>