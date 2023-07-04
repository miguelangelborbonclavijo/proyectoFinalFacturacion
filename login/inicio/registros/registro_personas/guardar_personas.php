<?php
    include("../../db.php");
    if(isset($_POST['guardar_clientes'])){
        $NumDocCli = $_POST['NumDocCli'];
        $TipDocCli = $_POST['TipDocCli'];
        $PriNomCli = $_POST['PriNomCli'];
        $SegNomCli = $_POST['SegNomCli'];
        $PriApeCli = $_POST['PriApeCli'];
        $SegApeCli = $_POST['SegApeCli'];
        $DirrCli = $_POST['DirrCli'];
        $ConCli = $_POST['ConCli'];
        $NomUsu = $_POST['nombre'];
        $TipUsu = 1;
        $query="INSERT INTO personas (PerId,PerTidId,PerNom1,PerNom2,PerApe1,PerApe2,PerDirr,PerTipUs) VALUES
        ('$NumDocCli','$TipDocCli','$PriNomCli','$SegNomCli','$PriApeCli','$SegApeCli','$DirrCli','$TipUsu')"; 
        mysqli_query($conn, $query);
        header("Location: ../../../../../login/registros/registro_personas/registro_personas.php");
    }
?> 
