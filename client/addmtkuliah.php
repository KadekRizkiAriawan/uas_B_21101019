<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<h2>Menambah Data Mata Kuliah</h2>
<form>
    <div class="mb-3">
        <label class="form-label">Kode Kuliah</label>
        <input type="text" class="form-control" id="txkode_mk" placeholder="Isikan Kode Kuliah">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Matakuliah</label>
        <input type="text" class="form-control" id="txnama" placeholder="Isikan Nama Mata Kuliah">
    </div>
    
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <button type="button" onclick="storedata()" class="btn btn-danger">Simpan Data</button>
          <button type="button" onclick="batal()" class="btn btn-warning">Batal</button>
    </div>

</form>
<script>
    document.getElementById("pesan").style.display = "none";
    function batal() {
    location.replace("http://localhost/UAS wbprog/client/home.php?p=mk")
    }
</script>
<script src="strdtmtkuliah.js"></script>