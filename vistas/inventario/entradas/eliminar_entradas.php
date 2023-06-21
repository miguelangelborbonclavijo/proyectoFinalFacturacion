<?php
    include('../registros/db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM compras WHERE ComId = $id";
        $resuleliminar = mysqli_query($conn, $query);
        if (!$resuleliminar){
            die ("Error eliminar");
        }
        header("Location: ../../../../../proyectoFinalFacturacion/vistas/inventario/entradas.php"); 
    }
?>