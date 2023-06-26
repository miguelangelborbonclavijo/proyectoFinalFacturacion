<?php
    include("../../registros/db.php");
    if(isset($_POST['guardar_producto'])){
        $TipPro = $_POST['TipPro'];
        $DesPro = $_POST['DesPro'];
        $PreCom = $_POST['PreCom'];
        $PreVen = $_POST['PreVent'];
        $query ="INSERT INTO productos ( ProTip, ProDes, ProPreCo, ProPreVe) VALUES 
        ('$TipPro','$DesPro','$PreCom','$PreVen')";
        mysqli_query($conn, $query);
        header("Location: ../registro_producto/registro_productos.php");
    }   
?>