function delete(){
    let kd_mk = document.getElementById("txkd_mk").value;
    
    let dta = "kd_mk="+kd_mk;
    const gh = new XMLHttpRequest();
    gh.open("POST","http://localhost/UAS wbprog/server/dtmtkuliahdlt.php");
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

