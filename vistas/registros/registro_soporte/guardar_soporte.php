<?php
    include("../db.php");
    if(isset($_POST['guardar_soporte'])){
        $NumDoSop = $_POST['NumDocSop'];
        $TipClSop = $_POST['TipCliSop'];
        $EstadSop = $_POST['EstSop'];
        $DescrSop = $_POST['DesSop'];
        $TipSop = $_POST['TipSopor'];
        $query ="INSERT INTO soporte (SopDoCl, SopTiCl, SopDesc, SopEstId, SopTiS) VALUES ('$NumDoSop','$TipClSop','$DescrSop','$EstadSop','$TipSop')";
        mysqli_query($conn, $query);
        header("Location: ../registro_soporte/registro_soportes.php");
    }
?>