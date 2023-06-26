<?php
    include("../db.php");
    if(isset($_POST['guardar_clientes'])){
        $TipDocCli = $_POST['TipDocCli'];
        $NumDocCli = $_POST['NumDocCli'];
        $PriNomCli = $_POST['PriNomCli'];
        $SegNomCli = $_POST['SegNomCli'];
        $PriApeCli = $_POST['PriApeCli'];
        $SegApeCli = $_POST['SegApeCli'];
        $CorrCli= $_POST['CorrCli'];
        $DirrCli = $_POST['DirrCli'];
        $ConCli = $_POST['ConCli'];
        $query="INSERT INTO personas (PerTidId,PerId,PerNom1,PerNom2,PerApe1,PerApe2,PerCor,PerCon) VALUES ('$TipDocCli','$NumDocCli','$PriNomCli','$SegNomCli','$PriApeCli','$SegApeCli','$CorrCli','$ConCli')"; 
        $sql="INSERT INTO  clientes (CliPerId,CliTipId,CliEsId,CliDirr) VALUES('$NumDocCli',1,1,'$DirrCli')"; 
        mysqli_query($conn, $query);
        mysqli_query($conn, $sql);
        header("Location: ../../../../../../proyectoFinalFacturacion/vistas/registros/registro_personas/registro_personas.php");
    }
?> 
