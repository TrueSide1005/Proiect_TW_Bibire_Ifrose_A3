async function csvData() {
    //preluarea valorii din form
    var str = document.getElementById("jud").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //preluarea valorii returnate de csvExport.php si parsarea acesteia sub forma de JSON
            var json3 = JSON.parse(this.responseText);
            //transformarea JSON-ului intr-un string ce pastreaza regulile unui csv
            var array = typeof json3 != 'object' ? JSON.parse(json3) : json3;
            var str = '';
            for (var i = 0; i < array.length; i++) {
                var line = '';
                for (var index in array[i]) {
                    if (line != '') line += ','
                    line += array[i][index];
                }
                str += line + '\r\n';
            }
            //crearea unui csv si descarcarea acestuia
            var encodedUri = 'data:application/csv;charset=utf-8,' + encodeURIComponent(str);
            var link = document.getElementById('link');
            link.setAttribute('download', 'data.csv');
            link.setAttribute('href', encodedUri);
            link.click();
        }
    };
    //apelarea csvExport.php cu valoarea primita in form-ul cu id-ul "jud"
    xmlhttp.open("GET", "/twApp/app/models/csvExport.php?q=" + str, false);
    xmlhttp.send();
}