function buildMap(ok) {
    function getData(data, somaj) {
        var i = 0;
        data.features.forEach(function iter(a) {
            a.somaj = somaj[i];
            i++;
            Array.isArray(a.children) && a.children.forEach(iter);
        });
    }
    var somaj = a.split(",").map(Number);
    getData(data, somaj);
    var mapboxAccessToken = 'sk.eyJ1IjoidHJ1ZXNpZGUxMDA1IiwiYSI6ImNrOXZiNHh3NjA5dm0zbW1vd3J3MjgwcjQifQ.h9dhTnwIPaXCPzj15e3Tjg';
    if (ok == 0) {
        var map = L.map('map').setView([46, 25], 6.5);
    } else {
        document.getElementById("ufi").innerHTML = "<div id=\"map\" class=\"map\"></div>";
        var map = L.map('map').setView([46, 25], 6.5);
    }

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=' + mapboxAccessToken, {
        id: 'mapbox/light-v9',
        attribution: 'Leaflet',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(map);

    L.geoJson(data).addTo(map);

    function getColor(d) {
        return d > 7.5 ? '#800026' :
            d > 6.25 ? '#BD0026' :
            d > 5 ? '#E31A1C' :
            d > 3.75 ? '#FC4E2A' :
            d > 2.5 ? '#FD8D3C' :
            d > 1.25 ? '#FEB24C' :
            d > 0.5 ? '#FED976' :
            '#FFEDA0';
    }

    function style(feature) {
        return {
            fillColor: getColor(feature.somaj),
            weight: 2,
            opacity: 1,
            color: 'white',
            dashArray: '',
            fillOpacity: 0.7
        };
    }

    L.geoJson(data, {
        style: style
    }).addTo(map);

    function highlightFeature(e) {
        var layer = e.target;

        layer.setStyle({
            weight: 5,
            color: '#666',
            dashArray: '',
            fillOpacity: 0.7
        });

        if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
            layer.bringToFront();
        }
        info.update(layer.feature);
    }

    function resetHighlight(e) {
        geojson.resetStyle(e.target);
        info.update();
    }

    function zoomToFeature(e) {
        map.fitBounds(e.target.getBounds());
    }

    function onEachFeature(feature, layer) {
        layer.on({
            mouseover: highlightFeature,
            mouseout: resetHighlight,
            click: zoomToFeature
        });
    }

    geojson = L.geoJson(data, {
        style: style,
        onEachFeature: onEachFeature
    }).addTo(map);

    var info = L.control();

    info.onAdd = function(map) {
        this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
        this.update();
        return this._div;
    };

    // method that we will use to update the control based on feature properties passed
    info.update = function(props) {
        this._div.innerHTML = '<h4>Rata somajului</h4>' + (props ?
            '<b>' + props.Name + '</b><br />' + props.somaj + '\%' :
            'Plasati cursorul peste un judet');
    };

    info.addTo(map);

    var legend = L.control({
        position: 'bottomright'
    });

    legend.onAdd = function(map) {

        var div = L.DomUtil.create('div', 'info legend'),
            grades = [0, 0.5, 1.25, 2.5, 3.75, 5, 6.25, 7.5],
            labels = [];

        // loop through our density intervals and generate a label with a colored square for each interval
        for (var i = 0; i < grades.length; i++) {
            div.innerHTML +=
                '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
                grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
        }

        return div;
    };

    legend.addTo(map);
    console.log("!!");
}

