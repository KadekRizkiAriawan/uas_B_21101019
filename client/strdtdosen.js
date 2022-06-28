function strdata(){
    let nip = document.getElementById("txnip").value;
    let nama = document.getElementById("txnama").value;
    let jkel = document.getElementById("txjkel").value; 
    let dta = "nip="+nip+"&nama="+nama+"&jkel="+jkel;
    const gh = new XMLHttpRequest();
    gh.open("POST","http://localhost/UAS wbprog/server/dtdosenstr.php");
    gh.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    gh.send(dta);
    gh.onload = function(){
        const dta = JSON.parse(this.responseText);
        if(dta["sukses"]){
            document.getElementById("pesan").style.display = "block";
        }
    }
}



