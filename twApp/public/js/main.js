//Style, display names

var style = new ol.style.Style({
    fill: new ol.style.Fill({
      color: 'rgba(255, 255, 255, 0.6)'
    }),
    stroke: new ol.style.Stroke({
      color: '#319FD3',
      width: 1
    }),
    text: new ol.style.Text({
      font: '12px Calibri,sans-serif',
      fill: new ol.style.Fill({
        color: '#000'
      }),
      stroke: new ol.style.Stroke({
        color: '#fff',
        width: 3
      })
    })
  });
  
  var vectorLayer = new  ol.layer.Vector({
    source: new ol.source.Vector({
      url: '/twApp/public/data/geojson/Ro.geojson',
      format: new ol.format.GeoJSON()
    }),
    style: function(feature) {
      style.getText().setText(feature.get('Name'));
      return style;
    }
  });
  
  var map = new ol.Map({
    layers: [
      new ol.layer.Tile({
          source: new ol.source.OSM()
      }),
      vectorLayer
  ],
    target: 'map',
    view: new ol.View({
      center: ol.proj.transform([25,46], 'EPSG:4326', 'EPSG:3857'),
      zoom: 7
    })
  });
  
  //Vector Feature Popup
  var overlayContainerElement = document.querySelector(".overlay-container");
  var overlayLayer = new ol.Overlay({
    element: overlayContainerElement
  });
  
  map.addOverlay(overlayLayer);
  var overlayFeatureName = document.getElementById('feature-name');
  
  map.on('click', function(e){
    map.forEachFeatureAtPixel(e.pixel, function(feature, layer){
      let clickedFeatureName = (feature.get('Link'));
      window.open(clickedFeatureName)
    })
  });