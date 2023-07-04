<?php
    include("../../login/db.php");
    if(isset($_POST['guardar_salida'])){
        $CodVen = $_POST['CodVen'];
        $CodTra = $_POST['CodTra'];
        $CodCli = $_POST['CodCli'];
        $CodPro = $_POST['CodPro'];
        $Can = $_POST['Can'];
        $Val = $_POST['Val'];
        $VenFech = $_POST['VenFech'];
        $query ="INSERT INTO ventas (VenId,VenCodId,VenTraId,VenCliId,VenCan,VenFech,VenTot,VenAcId,VenProId) VALUES 
        ('','$CodVen','$CodTra','$CodCli','$Can','$VenFech','$Val',1,'$CodPro')";
        mysqli_query($conn, $query);
        header("Location: ../../../../login/ventas/salidas.php");
    }
?>