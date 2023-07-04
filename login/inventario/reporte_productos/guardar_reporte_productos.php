<?php
    include("../../db.php");
    if(isset($_POST['guardar_reporte_productos'])){
        $codPro = $_POST['CodPro'];
        $DesRepPro = $_POST['DesRepPro'];
        $FechRePro = $_POST['FechRePro'];
        $query="INSERT INTO reporteproductos ( ReId	,ReProId,DesRePr,RepFech) 
        VALUES ('','$codPro','$DesRepPro','$FechRePro')"; 
        mysqli_query($conn, $query);
        header("Location: ../../../../../login/inventario/reporte_productos/resporta_productos.php");
    }
?> 
