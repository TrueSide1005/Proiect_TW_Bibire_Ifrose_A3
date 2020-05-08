
var ctx = document.getElementById("line-chart");

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["ALBA", "ARAD", "ARGES", "BACAU", "BIHOR", "BISTRITA NASAUD", "BOTOSANI", "BRAILA", "BRASOV", "BUZAU", "CALARASI",
            "CARAS-SEVERIN", "CLUJ", "CONSTANTA", "COVASNA", "DAMBOVITA", "DOLJ", "GALATI", "GIURGIU", "GORJ", "HARGHITA", "HUNEDOARA", "IALOMITA",
            "IASI", "ILFOV", "MARAMURES", "MEHEDINTI", "BUCURESTI", "MURES", "NEAMT", "OLT", "PRAHOVA", "SALAJ", "SATU MARE", "SIBIU", "SUCEAVA",
            "TELEORMAN", "TIMIS", "TULCEA", "VALCEA", "VASLUI", "VRANCEA"],
        datasets: [{
            data: [421, 221, 567, 915, 303, 406, 199, 374, 522, 663, 267, 311, 417, 479, 431, 655, 1398, 590, 203, 325, 649, 444, 300, 585, 99, 702,
                475, 176, 883, 632, 609, 504, 517, 439, 434, 1326, 714, 206, 313, 327, 336, 397],
            label: "Sub 25 ani",
            borderColor: "#3e95cd",
            fill: false
        }, {
            data: [304, 120, 422, 652, 216, 158, 100, 196, 313, 450, 112, 163, 269, 272, 195, 393, 861, 347, 51, 160, 311, 360, 157, 188,
                30, 327, 224, 1189, 425, 307, 304, 235, 304, 245, 253, 667, 472, 82, 222, 201, 249, 240],
            label: "25 - 29 ani",
            borderColor: "#8e5ea2",
            fill: false
        }, {
            data: [1041, 307, 1611, 2140, 844, 620, 461, 733, 1124, 1858, 647, 528, 881, 1142, 576, 1052, 2962, 1463, 258, 726, 1151, 964, 696, 1062,
                134, 896, 1586, 3693, 1377, 1273, 1209, 1145, 946, 922, 685, 2010, 1650, 497, 461, 788, 1380, 795],
            label: "30 - 39 ani",
            borderColor: "#3cba9f",
            fill: false
        }, {
            data: [1491, 639, 2353, 1240, 779, 925, 1245, 1318, 3323, 820, 912, 1274, 1874, 727, 1570, 4960, 3196, 392, 1229, 1282, 1871, 1122, 2122, 232,
                1248, 2427, 4473, 1577, 2142, 2490, 2054, 1079, 1103, 1000, 2898, 2587, 751, 775, 1360, 3267, 1326],
            label: "40 - 49 ani",
            borderColor: "#e8c3b9",
            fill: false
        }, {
            data: [1000, 460, 2429, 829, 641, 633, 711, 907, 2134, 533, 630, 897, 1462, 352, 1156, 3399, 2253, 349, 861, 723, 1305, 788, 1554, 125, 773,
                1015, 2949, 924, 1547, 1800, 1500, 723, 576, 613, 1626, 1922, 498, 586, 1080, 2043, 987],
            label: "50 - 55 ani",
            borderColor: "#c45850",
            fill: false
        }, {
            data: [933, 487, 1497, 2698, 723, 612, 814, 1042, 929, 2562, 633, 692, 741, 1534, 399, 1381, 3551, 2398, 387, 1013, 727, 878, 933, 2102,
                118, 584, 1196, 2516, 908, 1599, 1906, 1218, 657, 549, 703, 1862, 1959, 415, 443, 835, 2325, 1108],
            label: "peste  55 ani",
            borderColor: "#EAEABD ",
            fill: false
        }
        ]
    },
    options: {
        title: {
            display: true,
            text: 'Statistica șomajului pe grupe de vârste',
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