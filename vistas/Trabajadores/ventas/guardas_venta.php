<?php
    include("../registros/db.php");
    if(isset($_POST['guardar_salida'])){
        $CoProv = $_POST['SalCodCl'];
        $CoProd = $_POST['SalCodVe'];
        $Canti = $_POST['SalCodTr'];
        $CoProv = $_POST['SalCodPr'];
        $CoProd = $_POST['SalCan'];
        $Canti = $_POST['SalVal'];
        $query ="INSERT INTO compras (ComPvId,ComPrId,ComCan) VALUES 
        ('$CoProv','$CoProd','$Canti')";
        mysqli_query($conn, $query);
        header("Location: ../../../../../proyectoFinalFacturacion/vistas/compras/consultar_entradas.php");
    }
?>