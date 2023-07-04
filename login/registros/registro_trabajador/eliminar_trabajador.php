<?php
    include('../../db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM trabajadores WHERE TraId = $id";
        $resuleliminar = mysqli_query($conn, $query);
        if (!$resuleliminar){
            die ("Error eliminar");
        }
        header("Location: ../../../../../login/registros/registro_trabajador/consultar_trabajador.php"); 
    }
?>