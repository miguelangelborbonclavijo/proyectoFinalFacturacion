<?php
    include("../../db.php");
    if(isset($_POST['guardar_clientes'])){
        $NumDocCli = $_POST['NumDocuCli'];
        $DirreCli = $_POST['DirreCli'];
        $query ="INSERT INTO clientes ( CliPerId,CilTipId,CliEsId,CliDirr) VALUES ('$NumDocCli',1,1,'$DirreCli')";
        mysqli_query($conn, $query);
        header("Location: registro_clientes.php");
    }
?>