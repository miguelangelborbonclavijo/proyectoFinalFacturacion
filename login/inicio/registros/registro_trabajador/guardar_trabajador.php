<?php
    include("../../db.php");
    if(isset($_POST['guardar_trabajador'])){
        $NumDocTra = $_POST['NumDocTr'];
        $TipCarTra = $_POST['TipCarTr'];
        $HorLabTra = $_POST['HorLabTr'];
        $SalariTra = $_POST['SalariTr'];
        $query ="INSERT INTO trabajadores (TraId,TraPerId,TraCarId,TraHor,TraSalario) VALUES ('','$NumDocTra','$TipCarTra','$HorLabTra','$SalariTra')";
         mysqli_query($conn, $query);
        header("Location: ../../../../../login/registros/registro_trabajador/registro_trabajador.php");
    }
?>