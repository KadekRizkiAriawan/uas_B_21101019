<?php
    $output["error"] = true;
   
    if(isset($_GET["kd_mk"])){
        $kd_mk = $_GET["kd_mk"];

        include_once("dbkoneksi2.php");
        $sql = "SELECT KD_MK, NAMA FROM mk WHERE KD_MK='".$kd_mk."';";
        $hsl = mysqli_query($cnn, $sql);
        $output["isi"] = mysqli_fetch_all($hsl);
        $output["error"] = false;
    } 
   
    echo json_encode($output);

