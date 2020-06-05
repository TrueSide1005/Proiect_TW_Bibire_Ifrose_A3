var map;
var a;
var ok = 0;

async function showUser(str) {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //document.getElementById("txtHint").innerHTML = this.responseText;
            a = this.response;
            ok++;
        }
    };
    xmlhttp.open("GET", "/twApp/app/models/getdata.php?q=" + str, false);
    xmlhttp.send();
    buildMap(ok);
}