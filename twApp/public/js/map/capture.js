async function doCapture() {
    window.scrollTo(0, 0);
    html2canvas(document.getElementById("map"), {
        scrollY: -window.scrollY,
        scrollX: -window.scrollX
    }).then(function(canvas) {
        scale = 10;
        var link = document.getElementById('link');
        link.setAttribute('download', 'map.png');
        link.setAttribute('href', canvas.toDataURL("image/png").replace("image/png", "image/octet-stream"));
        link.click();
        document.getElementById("map").parentNode.classList.remove("overflowVisible");
    });
}