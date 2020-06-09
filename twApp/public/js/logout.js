function logOut() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("delogare").innerHTML = "<div id=\"alert\" class=\"logout\"><span id=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span><strong>" + this.responseText + "</strong></div>";
        }
    };
    xmlhttp.open("GET", "/app/components/logout.php", false);
    xmlhttp.send();
}