<?php
    include('../../db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM tipodeproducto WHERE TipId = $id";
        $resuleliminar = mysqli_query($conn, $query);
        if (!$resuleliminar){
            die ("Error eliminar");
        }
        header("Location: ../registro_tipo_productos/registro_tipo_producto.php"); 
    }
?>