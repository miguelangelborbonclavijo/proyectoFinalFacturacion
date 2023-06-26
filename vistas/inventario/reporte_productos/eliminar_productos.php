<?php
    include('../../registros/db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query1 = "DELETE FROM reporte_productos WHERE repId = $id";
        $resuleliminar = mysqli_query($conn, $query1);
        if (!$resuleliminar&&!$resul){
            die ("Error eliminar");
        }
        header("Location: ../../../../../../proyectoFinalFacturacion/vistas/inventario/reporte_productos/resporta_productos.php"); 
    }
?>

