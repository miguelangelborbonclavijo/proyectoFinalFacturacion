<?php
    include("../db.php");
    if(isset($_POST['guardarRegLog'])){
        $TipoDocu = $_POST['LogTipDoc'];
        $NumeDocu = $_POST['LogNumDoc'];
        $PriNomPe = $_POST['LogPriNomPer'];
        $SegNomPe = $_POST['LogSegNomPer'];
        $PriApePe = $_POST['LogPriApePer'];
        $SegApePe = $_POST['LogSegApePer'];
        $PriApePe = $_POST['LogPriApePer'];
        $SegApePe = $_POST['LogSegApePer'];
        $TipUsuCli = $_POST['LogTipUsu'];
        $DirreCli = $_POST['LogDirreCli'];
        $PerCor = $_POST['LogPerCor'];
        $PerCon = $_POST['LogPerCon'];
        $query="INSERT INTO personas ( PerTidId,PerId,PerNom1,PerNom2,PerApe1,PerApe2,PerCor,PerCon) VALUES ('$TipoDocu','$NumeDocu','$PriNomPe','$SegNomPe','$PriApePe','$SegApePe','$PerCor','$PerCon')"; 
        mysqli_query($conn, $query);
        $query ="INSERT INTO clientes ( CliPerId,CliTipId,CliEsId,CliDirr) VALUES ('$NumDocCli','$TipoCli','$EstadoCli','$DirreCli')";
        mysqli_query($conn, $query);
        header("Location: ../registro_persona/registro_personas.php");
    }
?>