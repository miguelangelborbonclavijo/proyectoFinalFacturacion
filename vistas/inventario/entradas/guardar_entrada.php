<?php
    include("../registros/db.php");
    if(isset($_POST['guardar_inventario_entrada'])){
        $CoProv = $_POST['CodProve'];
        $CoProd = $_POST['CodProd'];
        $Canti = $_POST['Cant'];
        $query ="INSERT INTO compras (ComPvId,ComPrId,ComCan) VALUES 
        ('$CoProv','$CoProd','$Canti')";
        mysqli_query($conn, $query);
        header("Location: ../../../../../proyectoFinalFacturacion/vistas/inventario/entradas.php");
    }
?>