
<?php 
    if($_GET["d"]==="mtkuliah"){
      if(isset($_GET["dt"])){
          if($_GET["dt"]=="addnew"){
              $dta="addmtkuliah.php";   
              $Tdata = "tambah data Mata Kuliah";  
          }
          if($_GET["dt"]=="edit"){
              $dta="editmtkuliah.php";     
              $Tdata = "Edit Data Mata Kuliah";
          }
          if($_GET["dt"]=="delete"){
              $dta="dltdtmtkuliah.php";     
              $Tdata="Hapus Data Mata Kuliah";
          }
      }else{
          $dta = "listmtkuliah.php";
          $Tdata="List Data Mata Kuliah";
      }
  }
  if($_GET["d"]==="dsn"){
    if(isset($_GET["dt"])){
        if($_GET["sp"]=="addnew"){
            $dta="adddtdosen.php";   
            $Tdata = "tambah data Dosen";  
        }
        if($_GET["dt"]=="edit"){
            $dta="edit.php";     
            $Tdata = "Edit Data Dosen";
        }
        if($_GET["dt"]=="delete"){
            $dta="dltdtdosen.php";     
            $TPage="Hapus data Dosen";
        }
    }else{
        $dta = "listdosen.php";
        $Tdata="List Data Dosen";
    }
}



  }else{
    
    $Tdata="Home";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$Tdata;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php"><b>DATA</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        <a class="nav-link" href="dtmtkuliah.php?p=mhs">Mahasiswa</a>
        <a class="nav-link" href="home.php?p=mk">Matakuliah</a>
        <a class="nav-link" href="home.php?p=dsn">Dosen</a>
      </div>
    </div>
  </div>
</nav>
<div class="container">

<?php
include_once($dta);
?>
</div>
</body>
</html


