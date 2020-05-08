var ctx = document.getElementById("myChart");

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["ALBA", "ARAD", "ARGES", "BACAU", "BIHOR", "BISTRITA NASAUD", "BOTOSANI", "BRAILA", "BRASOV", "BUZAU", "CALARASI",
            "CARAS-SEVERIN", "CLUJ", "CONSTANTA", "COVASNA", "DAMBOVITA", "DOLJ", "GALATI", "GIURGIU", "GORJ", "HARGHITA", "HUNEDOARA", "IALOMITA",
            "IASI", "ILFOV", "MARAMURES", "MEHEDINTI", "BUCURESTI", "MURES", "NEAMT", "OLT", "PRAHOVA", "SALAJ", "SATU MARE", "SIBIU", "SUCEAVA",
            "TELEORMAN", "TIMIS", "TULCEA", "VALCEA", "VASLUI", "VRANCEA"],
        datasets: [
            {
                label: "Population (thousands)",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#790404", "#e8c3b9", "#09E9E9", "#c45850", "#3e95cd", "#8e5ea2", "#3cba9f",
                    "#790404", "#e8c3b9", "#09E9E9", "#c45850", "#479B6D", "#F5CBA7", "#6E40F9", "#3e95cd", "#8e5ea2", "#3cba9f", "#F5CBA7",
                    "#790404", "#e8c3b9", "#09E9E9", "#c45850", "#479B6D", "#F5CBA7", "#6E40F9", "#3e95cd", "#8e5ea2", "#3cba9f", "#790404",
                    "#3e95cd", "#8e5ea2", "#3cba9f", "#790404", "#e8c3b9", "#09E9E9", "#09E9E9", "#c45850", "#479B6D", "#F5CBA7"],
                data: [5190, 2234, 8096, 10983, 4155, 3216, 3132, 4301, 5113, 10990, 3012, 3236, 4479, 6763, 2680, 6207, 17131, 10247, 1640,
                    4314, 4843, 5822, 3996, 7613, 738, 4530, 6923, 14996, 6094, 7500, 8318, 6656, 4226, 3834, 3688, 10389, 9304, 2449,
                    2800, 4591, 9600, 4853, 250, 882]
            }
        ]
    },
    options: {
        legend: { display: false },
        title: {
            display: true,
            text: 'Numar toatal someri Martie 2020',

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
chart.render();

