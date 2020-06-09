var map;
var a;
var ok = 0;

async function showData(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //preluarea datelor returnate de getdata.php
            a = this.response;
            ok++;
        }
    };
    //apelarea getdata.php cu valoarea din form ca parametru
    xmlhttp.open("GET", "/twApp/app/models/getdata.php?q=" + str, false);
    xmlhttp.send();
    buildMap(ok);
}