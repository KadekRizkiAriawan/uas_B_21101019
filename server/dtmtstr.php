<?php
    include_once("dbkoneksi2.php");

    $r["sukses"]=false;
    if(isset($_POST["kd_mk"])){
        $KD_MK=$_POST["kd_mk"];
        $NAMA=$_POST["nama"];
        $sql = "INSERT INTO mk(KD_MK, NAMA) 
            VALUES('$KD_MK', '$NAMA');";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);

    