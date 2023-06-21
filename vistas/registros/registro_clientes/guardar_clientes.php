<?php
    include("../db.php");
    if(isset($_POST['guardar_clientes'])){
        $NumDocCli = $_POST['NumDocuCli'];
        $TipoCli = $_POST['TipoCli'];
        $EstadoCli = $_POST['EstaCli'];
        $DirreCli = $_POST['DirreCli'];
        $query ="INSERT INTO clientes ( CliPerId,CliTipId,CliEsId,CliDirr) VALUES ('$NumDocCli','$TipoCli','$EstadoCli','$DirreCli')";
        mysqli_query($conn, $query);
        header("Location: registro_clientes.php");
    }
?>