<?php
include('conexion.php');
include('../registros/db.php');
if(!empty($_POST['conflogtra'])){
        $Correo = $_POST['loginemail'];
        $Contr = $_POST['logincontrasena'];
        $sql = $conexion->query("SELECT * FROM personas where PerCor = '$Correo' and PerCon = '$Contr'");
        mysqli_query($conn, $sql);
        if ($Correo = $sql && $Contr = $sql->fetch_object()){
            header("../login/logintra.php");
            echo "existe";
        }else{
            echo "No existe el usuario";
            echo "no existe";
        }

    }
?>  