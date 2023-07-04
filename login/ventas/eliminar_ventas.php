<?php
    include('../../login/db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM ventas WHERE VenId = $id";
        $resuleliminar = mysqli_query($conn, $query);
        if (!$resuleliminar){
            die ("Error eliminar");
        }
        header("Location: ../../../../login/ventas/consultar_venta.php"); 
    }
?>