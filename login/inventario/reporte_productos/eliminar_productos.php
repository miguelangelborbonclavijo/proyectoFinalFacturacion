<?php
    include('../../db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query1 = "DELETE FROM reporteproductos WHERE ReId = $id";
        $resuleliminar = mysqli_query($conn, $query1);
        if (!$resuleliminar&&!$resul){
            die ("Error eliminar");
        }
        header("Location: ../../../../../login/inventario/reporte_productos/consultar_reporte_productos.php"); 
    }
?>

