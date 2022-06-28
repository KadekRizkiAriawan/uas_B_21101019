<?php
    include_once("dbkoneksi2.php");
    
    $r["sukses"]=false;
    if(isset($_POST["kd_mk"])){
        $KD_MK=$_POST["kd_mk"];
        
        $sql = "DELETE FROM mk WHERE KD_MK='".$KD_MK."'"; 
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);