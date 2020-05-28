<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoSom</title>
    <link rel="stylesheet" href="/twApp/public/css/map.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=fetch,requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script src="//api.tiles.mapbox.com/mapbox.js/plugins/leaflet-image/v0.0.4/leaflet-image.js"></script>
    <script src="/twApp/public/js/map/data.js"></script>
    <script>
        var a;
        var ok = 0;

        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
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
        }
    </script>
    <script src="/twApp/public/js/map/leaf.js"></script>
    <script src="/twApp/public/js/map/html2canvas.js"></script>
    <script>
        function doCapture() {
            window.scrollTo(0, 0);
            html2canvas(document.getElementById("map")).then(function(canvas) {
                // Create an AJAX object
                var ajax = new XMLHttpRequest();
                // Setting method, server file name, and asynchronous
                ajax.open("POST", "/twApp/app/components/save-capture.php", true);
                // Setting headers for POST method
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Sending image data to server
                ajax.send("image=" + canvas.toDataURL("image/jpeg", 0.9));
                // Receiving response from server
                // This function will be called multiple times
                ajax.onreadystatechange = function() {
                    // Check when the requested is completed
                    if (this.readyState == 4 && this.status == 200) {
                        // Displaying response from server
                        console.log(this.responseText);
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
            });
        }
    </script>
</head>

<body>

    <div class="interactiv">
        <form class="date-pe-judete">
            <select class="date-pe-judete" name="users" onchange="showUser(this.value)">
                <option value="">Selecteaza o data:</option>
                <option value="martie2020_total">Rata somajului - martie 2020</option>
                <option value="martie2020_femei">Rata somajului femei - martie 2020</option>
                <option value="martie2020_barbati">Rata somajului barbati - martie 2020</option>
                <option value="februarie2020_total">Rata somajului - februarie 2020</option>
                <option value="februarie2020_femei">Rata somajului femei - februarie 2020</option>
                <option value="februarie2020_barbati">Rata somajului barbati- februarie 2020</option>
                <option value="ianuarie2020_total">Rata somajului - ianuarie 2020</option>
                <option value="ianuarie2020_femei">Rata somajului femei - ianuarie 2020</option>
                <option value="ianuarie2020_barbati">Rata somajului barbati - ianuarie 2020</option>
                <option value="decembrie2019_total">Rata somajului - decembrie 2019</option>
                <option value="decembrie2019_femei">Rata somajului femei - decembrie 2019</option>
                <option value="decembrie2019_barbati">Rata somajului barbati - decembrie 2019</option>
                <option value="noiembrie2019_total">Rata somajului - noiembrie 2019</option>
                <option value="noiembrie2019_femei">Rata somajului femei - noiembrie 2019</option>
                <option value="noiembrie2019_barbati">Rata somajului barbati - noiembrie 2019</option>
                <option value="octombrie2019_total">Rata somajului - octombrie 2019</option>
                <option value="octombrie2019_femei">Rata somajului femei - octombrie 2019</option>
                <option value="octombrie2019_barbati">Rata somajului barbati - octombrie 2019</option>
                <option value="septembrie2019_total">Rata somajului - septembrie 2019</option>
                <option value="septembrie2019_femei">Rata somajului femei - septembrie 2019</option>
                <option value="septembrie2019_barbati">Rata somajului barbati - septembrie 2019</option>
                <option value="august2019_total">Rata somajului - august 2019</option>
                <option value="august2019_femei">Rata somajului femei - august 2019</option>
                <option value="august2019_barbati">Rata somajului barbati - august 2019</option>
                <option value="iulie2019_total">Rata somajului - iulie 2019</option>
                <option value="iulie2019_femei">Rata somajului femei - iulie 2019</option>
                <option value="iulie2019_barbati">Rata somajului barbati - iulie 2019</option>
                <option value="iunie2019_total">Rata somajului - iunie 2019</option>
                <option value="iunie2019_femei">Rata somajului femei - iunie 2019</option>
                <option value="iunie2019_barbati">Rata somajului barbati - iunie 2019</option>
                <option value="mai2019_total">Rata somajului - mai 2019</option>
                <option value="mai2019_femei">Rata somajului femei - mai 2019</option>
                <option value="mai2019_barbati">Rata somajului barbati - mai 2019</option>
                <option value="aprilie2019_total">Rata somajului - aprilie 2019</option>
                <option value="aprilie2019_femei">Rata somajului femei - aprilie 2019</option>
                <option value="aprilie2019_barbati">Rata somajului barbati - aprilie 2019</option>
                <option value="martie2019_total">Rata somajului - martie 2019</option>
                <option value="martie2019_femei">Rata somajului femei - martie 2019</option>
                <option value="martie2019_barbati">Rata somajului barbati - martie 2019</option>
            </select>
        </form>
        <button class="buton-hover" onclick="doCapture();">Descarca harta</button>
        <div id="txtHint"></div>
    </div>
    <br>
    <div id="ufi">
        <div id="map" class="map"><img class="picture" src="/twApp/public/images/compass.png"></div>
    </div>
</body>

</html>