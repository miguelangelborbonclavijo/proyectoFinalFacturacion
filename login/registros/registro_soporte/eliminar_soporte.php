<?php
    include('../../../login/db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM soporte WHERE SopoId = $id";
        $resuleliminar = mysqli_query($conn, $query);
        if (!$resuleliminar){
            die ("Error eliminar");
        }
        header("Location: ../../../../../login/registros/registro_soporte/consultar_soporte.php"); 
    }
?>
