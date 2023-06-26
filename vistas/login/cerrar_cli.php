<?php
    session_start();
    session_destroy();
    header('Location: ../../../../../proyectoFinalFacturacion/vistas/login/tipo_usuario.php')
?>