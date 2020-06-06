
var judete = [];
var set1 = [];
var set2 = [];
var set3 = [];
var set4 = [];
var set5 = [];
var set6 = [];

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
                set1.push(data[i].sub25);
                set2.push(data[i].intre_25_29);
                set3.push(data[i].intre_30_39);
                set4.push(data[i].intre_40_49);
                set5.push(data[i].intre_50_55);
                set6.push(data[i].peste55);
            }

            var ctx = document.getElementById("line-chart");

            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: judete,
                    datasets: [{
                        data: set1,
                        label: "Sub 25 ani",
                        borderColor: "#3e95cd",
                        fill: false
                    }, {
                        data: set2,
                        label: "25 - 29 ani",
                        borderColor: "#8e5ea2",
                        fill: false
                    }, {
                        data: set3,
                        label: "30 - 39 ani",
                        borderColor: "#3cba9f",
                        fill: false
                    }, {
                        data: set4,
                        label: "40 - 49 ani",
                        borderColor: "#e8c3b9",
                        fill: false
                    }, {
                        data: set5,
                        label: "50 - 55 ani",
                        borderColor: "#c45850",
                        fill: false
                    }, {
                        data: set6,
                        label: "peste  55 ani",
                        borderColor: "#EAEABD ",
                        fill: false
                    }
                    ]
                },
                options: {
                    title: {
                        display: true,
                        text: 'Somajului pe grupe de vârste',
                        maintainAspectRatio: false,
                        layout: {
                            layout: {
                                padding: {
                                    left: 50,
                                    right: 0,
                                    top: 0,
                                    bottom: 0
                                }
                            }
                        }
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

