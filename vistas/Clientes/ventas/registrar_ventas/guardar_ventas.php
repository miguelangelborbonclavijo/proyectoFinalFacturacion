<?php
    include("../../../registros/db.php");
    if(isset($_POST['guardar_ventas'])){
        $NumCli = $_POST['DocCliVe'];
        $NumTra = $_POST['DocTraVe'];
        $CodPro = $_POST['CodProVe'];
        $CanPro = $_POST['CanProVe'];
        $ValPro = $_POST['ValProVe'];
        $ValTot = $_POST['ValTotVe'];
        $query ="INSERT INTO ventas ( VenCliId, VenTraId, Ventotal) VALUES ('$NumCli','$NumTra','$ValTot')";
        mysqli_query($conn, $query);
        header("Location: registro_proveedores.php");
    }
?>