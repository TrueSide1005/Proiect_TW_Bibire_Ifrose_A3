
var setFS = [];
var setIP = [];
var setIG = [];
var setIL = [];
var setIPL = [];
var setIPR = [];
var setIU = [];


getData();

function getData() {

    var request = new XMLHttpRequest();
    request.open('GET', '/twApp/app/models/Chart.php?q=' + set, true);

    request.onload = function () {
        if (this.status >= 200 && this.status < 400) {
            // Success!


            var data = JSON.parse(this.response);
            //console.log(data);

            for (var i in data) {
                // judete.push(data[i].Judet);
                setFS.push(data[i].fara_studii);
                setIP.push(data[i].invatamant_primar);
                setIG.push(data[i].invatamant_gimnazial);
                setIL.push(data[i].invatamant_liceal);
                setIPL.push(data[i].invatamant_postliceal);
                setIPR.push(data[i].invatamant_profesional);
                setIU.push(data[i].invatamant_universitar);
            }      

            var ctx = document.getElementById("educatie");

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: judete,
                    datasets: [{
                        label: 'Fara studii',
                        backgroundColor: "#caf270",
                        data: setFS,
                    }, {
                        label: 'Nivel primar',
                        backgroundColor: "#45c490",
                        data: setIP,
                    }, {
                        label: 'Nivel gimnazial',
                        backgroundColor: "#018061",
                        data: setIG,
                    },  {
                        label: 'Nivel liceal',
                        backgroundColor: "#005842",
                        data: setIL,
                    }, {
                        label: 'Nivel postliceal',
                        backgroundColor: "#008d93",
                        data: setIPL,
                    }, {
                        label: 'Nivel profesional',
                        backgroundColor: "##005358 ",
                        data: setIPR,
                    }, {
                        label: 'Nivel universitar',
                        backgroundColor: "#2e5468",
                        data: setIU,
                    }],
                    
                },
            options: {
                title: {
                        display: true,
                        text: 'Somajul pe nivel de educatie'
                },

                tooltips: {
                  displayColors: true,
                  callbacks:{
                    mode: 'x',
                  },
                },
                scales: {
                  xAxes: [{
                    stacked: true,
                    gridLines: {
                      display: false,
                    }
                  }],
                  yAxes: [{
                    stacked: true,
                    ticks: {
                      beginAtZero: true,
                    },
                    type: 'linear',
                  }]
                },
                   
                }
            });

        }
        else {
            console.log("Reached target server, but it returned an error");
        }
    };
    request.onerror = function () {
        // There was a connection error of some sort
    };
    request.send();
}

