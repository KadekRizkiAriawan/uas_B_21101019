function strdata(){
    let kd_mk= document.getElementById("txkd_mk").value;
    let nama = document.getElementById("txnama").value;

    let dta = "kd_mk="+kd_mk+"&nama="+nama+"&semester="+semester;
    const gh = new XMLHttpRequest();
    gh.open("POST","http://localhost/UAS wbprog/server/dtmtstr.php");
    gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    gh.send(dta);

    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        if(dta["sukses"]){
            document.getElementById("pesan").style.display = "block";
        }
    }
}


