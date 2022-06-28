<?php
    include_once("dbkoneksi2.php");
    
    $r["sukses"]=false;
    if(isset($_POST["nip"])){
        $NIP=$_POST["nip"];
        $NAMA=$_POST["nama"];
        $JK=$_POST["jkel"];
        $sql = "UPDATE dsn SET 
            NAMA='".$NAMA."',
            JK='".$JK."',
            WHERE NIP='".$NIP."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);

