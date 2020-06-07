async function doCapture() {
    window.scrollTo(0, 0);
    //transforma div-ul cu id-ul "map" in canvas
    html2canvas(document.getElementById("map"), {
        scrollY: -window.scrollY,
        scrollX: -window.scrollX
    }).then(function(canvas) {
        scale = 10;
        //transforma canvas-ul in imagine si o salveaza
        var link = document.getElementById('link');
        link.setAttribute('download', 'map.png');
        link.setAttribute('href', canvas.toDataURL("image/png").replace("image/png", "image/octet-stream"));
        link.click();
    });
}