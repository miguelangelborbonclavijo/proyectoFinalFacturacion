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
    $tipo_usuario = $_SESSION['tipo_usuario'];

    echo $nombre;?>
<button><a href="../../../login/salir.php">Salir</a></button><br>
<main tyle="margin-top:30;">
<a href="../../../login/inventario/registro_tipo_productos/registro_tipo_producto.php" class="btn btn-primary">Regresar</a>
    <div class="container-lg">
        <table class="table">
            <thead>
                <tr>
                    <br>
                    <h1 style="text-align: center;">TIPO DE PRODUCTOS</h1>
                    <br>
                </tr>
                <tr style="text-align: center;">
                    <th>CODIGO</th>
                    <th>TIPO DE PRODUCTO</th>
                    <th>ESTADO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM tipodeproducto";
                $resulproductos = mysqli_query($conn, $query);
                while ($filas = mysqli_fetch_array($resulproductos)) { ?>
                    <tr style="text-align: center;">
                        <td><?php echo $filas['TipId'] ?></td>
                        <td><?php echo $filas['TipNom'] ?></td>
                        <td>
                            <a href="../registro_tipo_productos/editar_tipo_producto.php?id=<?php echo $filas['TipId'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-success bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                </svg>
                            </a>
                            <?php if($tipo_usuario == 4){ ?>
                            <a href="../registro_tipo_productos/eliminar_tipo_productos.php?id=<?php echo $filas['TipId'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-danger bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                </svg>
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>
<?php include("../../includes/footer.php") ?>