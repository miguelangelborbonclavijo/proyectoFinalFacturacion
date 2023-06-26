<?php
    include("../../registros/db.php");
    if(isset($_POST['guardar_reporte_productos'])){
        $codPro = $_POST['CodPro'];
        $DesRepPro = $_POST['DesRepPro'];
        $FechRePro = $_POST['FechRePro'];
        $query="INSERT INTO reporte_productos (repId,RepProId,DesRePr,RepFech) 
        VALUES ('','$codPro','$DesRepPro','$FechRePro')"; 
        mysqli_query($conn, $query);
        header("Location: ../../../../../../proyectoFinalFacturacion/vistas/inventario/reporte_productos/resporta_productos.php");
    }
?> 
