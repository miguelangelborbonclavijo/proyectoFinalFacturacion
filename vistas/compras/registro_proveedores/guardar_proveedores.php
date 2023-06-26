<?php
    include("../../registros/db.php");
    if(isset($_POST['guardar_proveedores'])){
        $NipProv = $_POST['NipPro'];
        $NomProv = $_POST['NomPro'];
        $Dirr = $_POST['Dirre'];
        $query ="INSERT INTO proveedores (PrId, PrNomPr, PrDirr) VALUES 
        ('$NipProv','$NomProv','$Dirr')";
        mysqli_query($conn, $query);
        header("Location: ../registro_proveedores/registro_proveedor.php");
    }
?>