
var setUB = [];
var setUF = [];
var setRF = [];
var setRB = [];


getData(); 

async function getData() {

    var request = new XMLHttpRequest();
    request.open('GET', '/twApp/app/models/Chart.php?q=' + set, true);

    request.onload = function () {
        if (this.status >= 200 && this.status < 400) {

            var data = JSON.parse(this.response);

            for (var i in data) {
                setUB.push(data[i].nr_femei_urban);
                setUF.push(data[i].nr_barbati_urban);
                setRB.push(data[i].nr_femei_rural);
                setRF.push(data[i].nr_barbati_rural);

            }
            var ctx = document.getElementById("medii-chart");

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: judete,
                    datasets: [
                        {
                            label: "Nr. Femei Urban",
                            backgroundColor: "#e8c3b9",
                            data: setUF
                        }, {
                            label: "Nr. Barbati Urban",
                            backgroundColor: "#8e5ea2",
                            data: setUB
                        }, {
                            label: "Nr. Femei Rural",
                            backgroundColor: "#09E9E9",
                            data: setRF
                        }, {
                            label: "Nr. Barbati Rural",
                            backgroundColor:  "#c45850",
                            data: setRB
                        }
                    ]
                },
                options: {
                    title: {
                        display: true,
                        text: 'Population growth (millions)'
                    }
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

