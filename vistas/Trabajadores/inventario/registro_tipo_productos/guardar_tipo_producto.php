<?php
    include("../../registros/db.php");
    if(isset($_POST['guardar_tipProducto'])){
        $TipNomP = $_POST['TipNomPro'];
        $query ="INSERT INTO tipodeproducto (TipNom) VALUES ('$TipNomP')";
        mysqli_query($conn, $query);
        header("Location: ../registro_tipo_productos/registro_tipo_producto.php");
    }
?>