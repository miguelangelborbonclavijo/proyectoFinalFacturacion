<?php
    include("../../login/db.php");
    if(isset($_POST['guardar_inventario_entrada'])){
        $CoProv = $_POST['CodProve'];
        $CoProd = $_POST['CodProd'];
        $Canti = $_POST['Can'];
        $Tra = $_POST['TraId'];
        $query ="INSERT INTO compras (ComPvId,ComPrId,ComCan,ComTraId,ComEs) VALUES 
        ('$CoProv','$CoProd','$Canti','$Tra',1)";
        mysqli_query($conn, $query);
        header("Location: ../../../../login/compras/consultar_entradas.php");
    }
?>