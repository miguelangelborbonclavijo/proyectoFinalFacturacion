<?php
    include("../db.php");
    if(isset($_POST['guardar_trabajador'])){
        $NumDocTra = $_POST['NumDocTr'];
        $TipCarTra = $_POST['TipCarTr'];
        $HorLabTra = $_POST['HorLabTr'];
        $SalariTra = $_POST['SalariTr'];
        $query ="INSERT INTO trabajador (TraPerId,TraCarId,TraHor,TraSalar) VALUES 
        ('$NumDocTra','$TipCarTra','$HorLabTra','$SalariTra')";
        mysqli_query($conn, $query);
        header("Location: ../registro_trabajador/registro_trabajador.php");
    }
?>