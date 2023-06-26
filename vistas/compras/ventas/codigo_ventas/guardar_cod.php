<?php
    include("../../registros/db.php");
    if(isset($_POST['guardar_salida'])){
        $CoCliId = $_POST['CodCli'];
        $CoTraId = $_POST['CodTra'];
        $CodFec = $_POST['Fecha'];
        $query ="INSERT INTO codven (CodVenId,CodVenCl,CodTraId,CodFec) VALUES 
        ('','$CoCliId','$CoTraId','$CodFec')";
        mysqli_query($conn, $query);
        header("Location: ../../../../../../proyectoFinalFacturacion/vistas/ventas/codigo_ventas/cod_venta.php");
    }
?>