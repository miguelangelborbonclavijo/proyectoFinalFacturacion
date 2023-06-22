<?php
    include("../db.php");
    if(isset($_POST['guardar_personas'])){
        $TipoDocu = $_POST['TipDoc'];
        $NumeDocu = $_POST['NumDoc'];
        $PriNomPe = $_POST['PriNomPer'];
        $SegNomPe = $_POST['SegNomPer'];
        $PriApePe = $_POST['PriApePer'];
        $SegApePe = $_POST['SegApePer'];
        $PerCor = $_POST['PerCor'];
        $PerCon = $_POST['PerCon'];
        $query="INSERT INTO personas ( PerTidId,PerId,PerNom1,PerNom2,PerApe1,PerApe2,PerCor,PerCon) VALUES ('$TipoDocu','$NumeDocu','$PriNomPe','$SegNomPe','$PriApePe','$SegApePe','$PerCor','$PerCon')"; 
        mysqli_query($conn, $query);
        header("Location: ../registro_persona/registro_personas.php");
    }
?> 