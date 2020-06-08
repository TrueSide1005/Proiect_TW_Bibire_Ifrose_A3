async function doSVG() {
    window.scrollTo(0, 0);
    //transforma div-ul cu id-ul "map" in canvas
    html2canvas(document.getElementById("map")).then(function(canvas) {
        scale = 10;
        //creaza un textul unui tag svg cu imaginea canvas-ului
        var abc = "<svg width=\"" + canvas.width + "\" height=\"" + canvas.height + "\" xmlns=\"http://www.w3.org/2000/svg\" "+
        "xmlns:xlink=\"http://www.w3.org/1999/xlink\"><image xlink:href=\"" +
        canvas.toDataURL("image/png").replace("image/png", "image/octet-stream") +
         "\" width=\"" + canvas.width + "\" height=\"" + canvas.height + "\" x=\"0\" y=\"0\"></image></svg>";
        var dataUrl = 'data:image/svg+xml,' + abc;
        var link = document.getElementById('link');
        //descarca svg-ul
        link.setAttribute('download', 'map.svg');
        link.setAttribute('href', dataUrl);
        link.click();
    });
}