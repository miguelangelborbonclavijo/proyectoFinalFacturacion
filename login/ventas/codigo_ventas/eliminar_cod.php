<?php
    include('../../../login/db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM codven WHERE CodVenId = $id";
        $resuleliminar = mysqli_query($conn, $query);
        if (!$resuleliminar){
            die ("Error eliminar");
        }
        header("Location: ../../../../../../proyectoFinalFacturacion/vistas/ventas/codigo_ventas/cod_venta.php"); 
    }
?>