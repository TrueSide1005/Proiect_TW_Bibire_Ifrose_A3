var speedData = {
    labels: ["ALBA", "ARAD", "ARGES", "BACAU", "BIHOR", "BISTRITA NASAUD", "BOTOSANI", "BRAILA", "BRASOV", "BUZAU", "CALARASI",
    "CARAS-SEVERIN", "CLUJ", "CONSTANTA", "COVASNA", "DAMBOVITA", "DOLJ", "GALATI", "GIURGIU", "GORJ", "HARGHITA", "HUNEDOARA", "IALOMITA",
    "IASI", "ILFOV", "MARAMURES", "MEHEDINTI", "BUCURESTI", "MURES", "NEAMT", "OLT", "PRAHOVA", "SALAJ", "SATU MARE", "SIBIU", "SUCEAVA",
    "TELEORMAN", "TIMIS", "TULCEA", "VALCEA", "VASLUI", "VRANCEA"],
    datasets: [{
        label: "Nr. șomeri femei urban",
        data: [966, 464,  921, 897, 894, 621, 587, 582, 841, 927,  354,  656, 1198,2468,  376, 545,1297,  1018,229, 754, 710, 2224,   627,  592,
            127, 1247,   772, 611,   747,  978,  1301,  458, 415, 638, 1356,  1101,  668,  480,  904, 698, 491, 7908   ],
        backgroundColor: ['rgba(155, 199, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)' ],
    },
    {
        label: "Nr. șomeri bărbăși urban",
        data: [950,  408,   623,   1772,  529, 459,  535,  557,   690,  954, 335, 745,  737, 965,  362,  495, 1181,  843, 139, 536, 686,  1695,
            571, 515,  89, 1062, 774, 565, 664, 814, 1023, 342, 355, 581, 1425, 1059, 508, 349, 662, 616, 477,7088 ],
        backgroundColor: "rgba(55, 255, 173, 0.1)"
    },
    {
        label: "Nr. șomeri femei rural",
        backgroundColor: "rgba(255, 10, 13, 0.1)",
        data: [1394, 689,   3004,  3623,   1492,  972,803,  1211,  1489,  3506, 1123,810, 1183,  1779, 819, 2392, 5848,3349, 644,1342,1457,935,
            1168, 2789, 291, 957,2139,2073, 2557, 2627,2026,1339, 1313, 1070, 3171, 2863, 643, 925,1411,3216,1574, 0 ],
    },
    {
        label: "Nr. șomeri bărbăti rural",
        backgroundColor: "rgba(10, 50, 83, 0.2)",
        data: [1880,  673, 3548, 4691, 1240, 1164, 1207, 1951, 2093, 5603, 1200, 1025, 1361, 1551, 1123, 2775, 8805,5037,  628, 1682, 1990, 968,
            1630, 3717, 231,1264,3238, 2845,3532, 3899, 2306, 2087, 1751, 1399, 4437, 4281, 630, 1046,1614, 5070, 2311, 0],
    }

    ]
};

var chartOptions = {
    legend: {
        display: true,
        position: 'top',
        labels: {
            boxWidth: 80,
            fontColor: 'black'
        }

    }
};


var ctx = document.getElementById("medii-chart");

var myChart = new Chart(ctx, {
    type: 'line',
    data: speedData,
    options: chartOptions
});