document.getElementById("download").addEventListener('click', function(){
    /*Get image of canvas element*/
    var url_base64jp = document.getElementById("myChart").toDataURL("image/svg");
    /*get download button (tag: <a></a>) */
    var a =  document.getElementById("download");
    /*insert chart image url to download button (tag: <a></a>) */
    a.href = url_base64jp;
  }); 


 /* let chart = document.getElementById("myChart"); 

  document.getElementById('chartExport').onclick = () => { 
 
    let svgData = chart.svgObject.outerHTML; 
    svgData = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">' + svgData + "</svg>"; 
    let  svgBlob = new Blob([svgData], {type:"image/svg+xml;charset=utf-8"}); 
    let svgUrl = URL.createObjectURL(svgBlob); 
    let downloadLink = document.createElement('a'); 
    downloadLink.rel='nofollow';
    href = svgUrl; 
    downloadLink.download = 'chart.svg'; 
    document.body.appendChild(downloadLink); 
    downloadLink.click(); 
    document.body.removeChild(downloadLink); 
 
} */