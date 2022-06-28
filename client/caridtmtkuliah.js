let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let kode_mk = urlP.get("kode_mk");

let urltarget = new URL("http://localhost/UAS wbprog/server/dtkodemtkuliah.php");
urltarget.searchParams.set("kd_mk",kd_mk);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    console.log(dta["isi"]);

    for(i=0;i<dta["isi"].length;i++){
        document.getElementById("txkd_mk").value = dta["isi"][i][0];
        document.getElementById("txnama").value = dta["isi"][i][1];
    }
}

