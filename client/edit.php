<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<h2>Edit Data Dosen</h2>
<form>
    <div class="mb-3">
        <label class="form-label">NIP</label>
        <input type="text" class="form-control" id="txnip" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" id="txnama">
    </div>
    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select id="txjkel" class="form-select">
            <option value="L"> Laki-Laki </option>
            <option value="P"> Perempuan </option>
        </select>
    </div>

    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <button type="button" onclick="updatedata()" class="btn btn-danger">Simpan</button>
          <button type="button" onclick="batal()" class="btn btn-warning">Batal</button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
    function batal() {
    location.replace("http://localhost/UAS wbprog/client/home.php?p=dsn")
}
</script>

<script src="caridt.js"></script>
<script src="updatedt.js"></script>

