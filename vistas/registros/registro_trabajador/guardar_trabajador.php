<?php
    include("../db.php");
    if(isset($_POST['guardar_trabajador'])){
        $TipDocTra = $_POST['TipDocTr'];
        $NumDocTra = $_POST['NumDocTr'];
        $PriNomTra = $_POST['PriNomTr'];
        $SegNomTra = $_POST['SegNomTr'];
        $PriApeTra = $_POST['PriApeTr'];
        $SegApeTra = $_POST['SegApeTr'];
        $TipCarTra = $_POST['TipCarTr'];
        $HorLabTra = $_POST['HorLabTr'];
        $SalariTra = $_POST['SalariTr'];
        $CorrTra = $_POST['CorrTra'];
        $ConTra = $_POST['ConTra'];
        $query="INSERT INTO personas (PerTidId,PerId,PerNom1,PerNom2,PerApe1,PerApe2) VALUES ('$TipDocTra','$NumDocTra','$PriNomTra','$SegNomTra','$PriApeTra','$SegApeTra')"; 
        $sql ="INSERT INTO trabajador (TraPerId,TraCarId,TraHor,TraSalar,TrCorr,TrCon) VALUES ('$NumDocTra','$TipCarTra','$HorLabTra','$SalariTra','$CorrTra','$ConTra')";
         mysqli_query($conn, $query);
         mysqli_query($conn, $sql);
        header("Location: ../../../../../../proyectoFinalFacturacion/vistas/registros/registro_trabajador/registro_trabajador.php");
    }
?>