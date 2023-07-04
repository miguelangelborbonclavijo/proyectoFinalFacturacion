<?php
    include("../../login/db.php");
    if(isset($_POST['guardar_inventario_entrada'])){
        $CoProv = $_POST['CodProve'];
        $CoProd = $_POST['CodProd'];
        $Canti = $_POST['Can'];
        $Tra = $_POST['TraId'];
        $query ="INSERT INTO compras (ComPvId,ComPrId,ComCan,ComTraId) VALUES 
        ('$CoProv','$CoProd','$Canti','$Tra')";
        mysqli_query($conn, $query);
        header("Location: ../../../../login/compras/consultar_entradas.php");
    }
?>