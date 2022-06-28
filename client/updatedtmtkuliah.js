function updatedata(){
    let kd_mk = document.getElementById("txkd_mk").value;
    let nama = document.getElementById("txnama").value;

    let dta = "kd_mk="+kd_mk+"&nama="+nama;
    const gh = new XMLHttpRequest();
    gh.open("POST","http://localhost/UAS wbprog/server/dtmtkuliahupdate.php");
    gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    gh.send(dta);
    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        if(dta["sukses"]){
            document.getElementById("pesan").style.display = "block";
        }
        setTimeout(()=>{
            window.location.href="http://localhost/UAS wbprog/client/home.php?p=mk";
        },5000);
    }
}

