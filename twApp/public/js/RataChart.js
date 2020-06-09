

var judete = [];
var rata = [];


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
                judete.push(data[i].Judet);
                rata.push(data[i].NumarTotal);
            }

            var ctx = document.getElementById("total");
            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: judete,
                    datasets: [
                        {
                            label: '',
                            backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#790404", "#e8c3b9", "#09E9E9", "#c45850", "#3e95cd", "#8e5ea2", "#3cba9f",
                            "#790404", "#e8c3b9", "#09E9E9", "#c45850", "#479B6D", "#F5CBA7", "#6E40F9", "#3e95cd", "#8e5ea2", "#3cba9f", "#F5CBA7",
                            "#790404", "#e8c3b9", "#09E9E9", "#c45850", "#479B6D", "#F5CBA7", "#6E40F9", "#3e95cd", "#8e5ea2", "#3cba9f", "#790404",
                            "#3e95cd", "#8e5ea2", "#3cba9f", "#790404", "#e8c3b9", "#09E9E9", "#09E9E9", "#c45850", "#479B6D", "#F5CBA7"],
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: rata
                        }
                    ]
                },
                options: {
                    title: {
                        display: true,
                        text: 'Numar total someri pe judet',
                        maintainAspectRatio: false,
                    },
                    legend: {
                        display: false
                    },
            }
            });        
        } else {
            console.log("Reached target server, but it returned an error");
        }
    };
    request.onerror = function () {
        // There was a connection error of some sort
    };
    request.send();
}







