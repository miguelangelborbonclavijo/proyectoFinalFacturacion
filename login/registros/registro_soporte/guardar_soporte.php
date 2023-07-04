<?php
    include("../../../login/db.php");
    if(isset($_POST['guardar_soporte'])){
        $NumDoSop = $_POST['NumDocSop'];
        $TipClSop = $_POST['TipCliSop'];
        $DescrSop = $_POST['DesSop'];
        $TipSop = $_POST['TipSopor'];
        $FechSop = $_POST['FechSop'];
        $query ="INSERT INTO soporte (SopDoCl, SopTiCl, SopDesc, SopEstId,SopTiS) VALUES ('$NumDoSop','$TipClSop','$DescrSop','1','$TipSop')";
        mysqli_query($conn, $query);
        header("Location: ../../../../../login/registros/registro_soporte/registro_soportes.php");
    }
?>