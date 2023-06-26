<?php
    include('../db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query1 = "DELETE FROM clientes WHERE CliPerId = $id";
        $resuleliminar = mysqli_query($conn, $query1);
        if (!$resuleliminar&&!$resul){
            die ("Error eliminar");
        }
        header("Location: registro_personas.php"); 
    }
?>
<?php
    include('../db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM personas WHERE PerId = $id";
        $resuleliminar = mysqli_query($conn, $query);
        if (!$resuleliminar&&!$resul){
            die ("Error eliminar");
        }
        header("Location: registro_personas.php"); 
    }
?>

