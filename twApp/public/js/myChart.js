document.addEventListener('DOMContentLoaded', function () {


    var request = new XMLHttpRequest();
    request.open('GET', '/twApp/app/models/chart.php', true);

    request.onload = function () {
        if (this.status >= 200 && this.status < 400) {
            // Success!
            var data = this.response;
            console.log(data);
            var judete = [];
            var rata = [];


            for (var i in data) {
                judete.push(data[i].Judet);
                rata.push(data[i].NumarTotal);  
                
            }

            var chartdata = {
                labels: judete,
                datasets: [
                    {
                        label: 'Judet Rata',
                        backgroundColor: 'rgba(200, 200, 200, 0.75)',
                        borderColor: 'rgba(200, 200, 200, 0.75)',
                        hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                        hoverBorderColor: 'rgba(200, 200, 200, 1)',
                        data: rata
                    }
                ]
            };

            var ctx = document.getElementById("myChart");

            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata
            });

           // 

        } else {
            // We reached our target server, but it returned an error

        }
        //barGraph.render();
    };

    request.onerror = function () {
        // There was a connection error of some sort
    };

    request.send();

});