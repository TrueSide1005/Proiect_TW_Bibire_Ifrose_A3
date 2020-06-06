async function csvData() {
    var str = document.getElementById("jud").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var json3 = JSON.parse(this.responseText);
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
            var encodedUri = 'data:application/csv;charset=utf-8,' + encodeURIComponent(str);
            var link = document.getElementById('link');
            link.setAttribute('download', 'data.csv');
            link.setAttribute('href', encodedUri);
            link.click();
        }
    };
    xmlhttp.open("GET", "/twApp/app/models/csvExport.php?q=" + str, false);
    xmlhttp.send();
}