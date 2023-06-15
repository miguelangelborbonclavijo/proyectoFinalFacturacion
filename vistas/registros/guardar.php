<?php
    include("db.php");
    if(isset($_POST['guardar_producto'])){
        $TipPro = $_POST['TipPro'];
        $DesPro = $_POST['DesPro'];
        $PreCom = $_POST['PreCom'];
        $PreVen = $_POST['PreVent'];
        $query ="INSERT INTO productos ( ProTip, ProDes, ProPreCo, ProPreVe) VALUES 
        ('$TipPro','$DesPro','$PreCom','$PreVen')";
        mysqli_query($conn, $query);
        header("Location:registro_productos.php");
    }   
?>
<?php
    include("db.php");
    if(isset($_POST['guardar_tipProducto'])){
        $TipNomP = $_POST['TipNomPro'];
        $query ="INSERT INTO tipodeproducto (TipNom) VALUES ('$TipNomP')";
        mysqli_query($conn, $query);
        header("Location: tipo_producto.php");
    }
?>
<?php
    include("db.php");
    if(isset($_POST['guardar_proveedores'])){
        $NipProv = $_POST['NipPro'];
        $NomProv = $_POST['NomPro'];
        $Dirr = $_POST['Dirre'];
        $query ="INSERT INTO proveedores (PrId, PrNomPr, PrDirr) VALUES 
        ('$NipProv','$NomProv','$Dirr')";
        mysqli_query($conn, $query);
        header("Location: registro_proveedores.php");
    }
?>
<?php
    include("db.php");
    if(isset($_POST['guardar_soporte'])){
        $NumDoSop = $_POST['NumDocSop'];
        $TipClSop = $_POST['TipCliSop'];
        $EstadSop = $_POST['EstSop'];
        $DescrSop = $_POST['DesSop'];
        $TipSop = $_POST['TipSopor'];
        $query ="INSERT INTO soportes (SopId, SopTipCl, SopEsId, SopDes ,SopTipS) VALUES ('$NumDoSop','$TipClSop','$EstadSop','$DescrSop','$TipSop')";
        mysqli_query($conn, $query);
        header("Location: registro_proveedores.php");
    }
?>
<?php
    include("db.php");
    if(isset($_POST['guardar_ventas'])){
        $NumCli = $_POST['DocCliVe'];
        $NumTra = $_POST['DocTraVe'];
        $CodPro = $_POST['CodProVe'];
        $CanPro = $_POST['CanProVe'];
        $ValPro = $_POST['ValProVe'];
        $ValTot = $_POST['ValTotVe'];
        $query ="INSERT INTO ventas ( VenCliId, VenTraId, Ventotal) VALUES ('$NumCli','$NumTra','$ValTot')";
        mysqli_query($conn, $query);
        header("Location: registro_proveedores.php");
    }
?>
<?php
    include("db.php");
    if(isset($_POST['guardar_personas'])){
        $TipoDocu = $_POST['TipDoc'];
        $NumeDocu = $_POST['NumDoc'];
        $PriNomPe = $_POST['PriNomPer'];
        $SegNomPe = $_POST['SegNomPer'];
        $PriApePe = $_POST['PriApePer'];
        $SegApePe = $_POST['SegApePer'];
        $PerCor = $_POST['PerCor'];
        $PerCon = $_POST['PerCon'];
        $query="INSERT INTO personas ( PerTidId,PerId,PerNom1,PerNom2,PerApe1,PerApe2,PerCor,PerCon) VALUES ('$TipoDocu','$NumeDocu','$PriNomPe','$SegNomPe','$PriApePe','$SegApePe','$PerCor','$PerCon')"; 
        mysqli_query($conn, $query);
        header("Location: ../registros/registro_personas.php");
    }
?>
<?php
    include("db.php");
    if(isset($_POST['guardar_clientes'])){
        $NumDocCli = $_POST['NumDocuCli'];
        $TipoCli = $_POST['TipoCli'];
        $EstadoCli = $_POST['EstaCli'];
        $DirreCli = $_POST['DirreCli'];
        $query ="INSERT INTO clientes ( CliPerId,CliTipId,CliEsId,CliDirr) VALUES ('$NumDocCli','$TipoCli','$EstadoCli','$DirreCli')";
        mysqli_query($conn, $query);
        header("Location: registro_clientes.php");
    }
?>
<?php
    include("db.php");
    if(isset($_POST['guardar_trabajador'])){
        $NumDocTra = $_POST['NumDocTr'];
        $TipCarTra = $_POST['TipCarTr'];
        $HorLabTra = $_POST['HorLabTr'];
        $SalariTra = $_POST['SalariTr'];
        $query ="INSERT INTO trabajador (TraPerId,TraCarId,TraHor,TraSalar) VALUES 
        ('$NumDocTra','$TipCarTra','$HorLabTra','$SalariTra')";
        mysqli_query($conn, $query);
        header("Location: registro_trabajadores.php");
    }
?>