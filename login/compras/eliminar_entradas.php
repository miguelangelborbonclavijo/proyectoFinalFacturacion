<?php
    include('../../login/db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM compras WHERE ComId = $id";
        $resuleliminar = mysqli_query($conn, $query);
        if (!$resuleliminar){
            die ("Error eliminar");
        }
        header("Location: ../../../../login/compras/consultar_entradas.php"); 
    }
?>