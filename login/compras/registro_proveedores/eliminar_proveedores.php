<?php
    include('../../../login/db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM proveedores WHERE PrId = $id";
        $resuleliminar = mysqli_query($conn, $query);
        if (!$resuleliminar){
            die ("Error eliminar");
        }
        header("Location: ../registro_proveedores/registro_proveedor.php"); 
    }
?>