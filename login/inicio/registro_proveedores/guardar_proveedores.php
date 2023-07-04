<?php
    include("../../db.php");
    if(isset($_POST['guardar_proveedores'])){
        $NipProv = $_POST['NipPro'];
        $NomProv = $_POST['NomPro'];
        $Dirr = $_POST['Dirre'];
        $cel = $_POST['NuCel'];
        $query ="INSERT INTO proveedores (PrId, PrNomPr, PrDirr, PrCel) VALUES 
        ('$NipProv','$NomProv','$Dirr','$cel')";
        mysqli_query($conn, $query);
        header("Location: ../../../../../login/compras/registro_proveedores/registro_proveedor.php");
    }
?>