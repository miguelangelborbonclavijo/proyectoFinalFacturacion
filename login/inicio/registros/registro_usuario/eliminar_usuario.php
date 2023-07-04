<?php
    include('../../db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM usuarios WHERE `usuarios`.`UsuId` = $id";
        $resuleliminar = mysqli_query($conn, $query);
        if (!$resuleliminar){
            die ("Error eliminar");
        }
        header("Location: ../../../../../login/registros/registro_usuariO/registro_usuario.php"); 
    }
?>
