<?php
    include("../../db.php");
    if(isset($_POST['guardar_usuarios'])){
        $TipUsu = $_POST['TipUsu'];
        $NumDocUsu = $_POST['NumDocUsu'];
        $ConUsu = $_POST['ConUsu'];
        $NomUsu = $_POST['NomUsu'];
        $query="INSERT INTO usuarios (UsuId,usuario,contrasena,nombre,tipo_usuario) VALUES
        ('','$NumDocUsu','$ConUsu','$NomUsu','$TipUsu')"; 
        mysqli_query($conn, $query);
        header("Location: ../../../../../login/registros/registro_usuario/registro_usuario.php");
    }
?> 
