<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<h2>Delete Data Matakuliah </h2>
<form>
    <div class="mb-3">
        <label class="form-label">KD_MK</label>
        <input type="text" class="form-control" id="txkd_mk" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama_MK</label>
        <input type="text" class="form-control" id="txnama">
    </div>

    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <button type="button" onclick="deletedata()" class="btn btn-danger">Hapus Data</button>
          <button type="button" onclick="batal()" class="btn btn-warning">Batal</button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
    function batal() {
    location.replace("http://localhost/UAS wbprog/client/home.php?p=mk")
    }
</script>

<script src="caridtmtkuliah.js"></script>
<script src="dltdtmtkuliah.js"></script>

