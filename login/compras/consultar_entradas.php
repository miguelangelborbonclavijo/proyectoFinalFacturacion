<?php
    session_start();
    include('../../login/db.php');
?>
<?php 
    if(!isset($_SESSION['usuario'])){
        header("Location: ../../login/principal.php");
    } ?>
<?php  include('../../login/includes/head.php'); 
    $nombre = $_SESSION['nombre'];	

    echo $nombre;?>
<button><a href="../../login/salir.php">Salir</a></button><br>
<main style="margin-top:30px;">
<a href="../../login/compras/entradas.php" class="btn btn-primary">Regresar</a>
  <div class="container-lg">
    <table class="table">
      <thead>
        <tr>
          <h1 style="text-align: center;">REGISTRADOS DE COMPRAS</h1>
          <br>
        </tr>
        <tr style="text-align: center;">
          <th scope="col">CODIGO COMPRA</th>
          <th scope="col">ESTADO</th>
          <th scope="col">CODIGO PROVEEDOR</th>
          <th scope="col">CODIGO PRODUCTO</th>
          <th scope="col">CANTIDAD</th>
          <th scope="col">FECHA</th>
          <th scope="col">ESTADOS</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT * FROM compras";
        $resulproductos = mysqli_query($conn, $query);
        while ($filas = mysqli_fetch_array($resulproductos)) { ?>
          <tr style="text-align: center;">
            <td><?php echo $filas['ComId'] ?></td>
            <td><?php echo $filas['ComEs'] ?></td>
            <td><?php echo $filas['ComPvId'] ?></td>
            <td><?php echo $filas['ComPrId'] ?></td>
            <td><?php echo $filas['ComCan'] ?></td>
            <td><?php echo $filas['ComFec'] ?></td>
            <td>
              <a href="../../login/compras/editar_entradas.php?id=<?php echo $filas['ComId'] ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-success bi bi-pen" viewBox="0 0 16 16">
                  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                </svg>
              </a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
      </tbody>
    </table>
  </div>
</main>
<?php include("../includes/footer.php") ?>