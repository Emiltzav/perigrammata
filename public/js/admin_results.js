// Hmmy mathisiaka apotelesmata
const hmmy_c1 = document.getElementById("hmmy_c1").value;
const hmmy_c2 = document.getElementById("hmmy_c2").value;
const hmmy_c3 = document.getElementById("hmmy_c3").value;
const hmmy_c4 = document.getElementById("hmmy_c4").value;
const hmmy_c5 = document.getElementById("hmmy_c5").value;
const hmmy_c6 = document.getElementById("hmmy_c6").value;
const hmmy_c7 = document.getElementById("hmmy_c7").value;
// Hmmy genikes ikanothtes
const hmmy1_c1 = document.getElementById("hmmy1_c1").value;
const hmmy1_c2 = document.getElementById("hmmy1_c2").value;
const hmmy1_c3 = document.getElementById("hmmy1_c3").value;
const hmmy1_c4 = document.getElementById("hmmy1_c4").value;
const hmmy1_c5 = document.getElementById("hmmy1_c5").value;
const hmmy1_c6 = document.getElementById("hmmy1_c6").value;
const hmmy1_c7 = document.getElementById("hmmy1_c7").value;

// Mpd mathisiaka apotelesmata
const mpd_c1 = document.getElementById("mpd_c1").value;
const mpd_c2 = document.getElementById("mpd_c2").value;
const mpd_c3 = document.getElementById("mpd_c3").value;
const mpd_c4 = document.getElementById("mpd_c4").value;
const mpd_c5 = document.getElementById("mpd_c5").value;
const mpd_c6 = document.getElementById("mpd_c6").value;
const mpd_c7 = document.getElementById("mpd_c7").value;
// Mpd genikes ikanothtes
const mpd1_c1 = document.getElementById("mpd1_c1").value;
const mpd1_c2 = document.getElementById("mpd1_c2").value;
const mpd1_c3 = document.getElementById("mpd1_c3").value;
const mpd1_c4 = document.getElementById("mpd1_c4").value;
const mpd1_c5 = document.getElementById("mpd1_c5").value;
const mpd1_c6 = document.getElementById("mpd1_c6").value;
const mpd1_c7 = document.getElementById("mpd1_c7").value;

// Mihop mathisiaka apotelesmata
const mihop_c1 = document.getElementById("mihop_c1").value;
const mihop_c2 = document.getElementById("mihop_c2").value;
const mihop_c3 = document.getElementById("mihop_c3").value;
const mihop_c4 = document.getElementById("mihop_c4").value;
const mihop_c5 = document.getElementById("mihop_c5").value;
const mihop_c6 = document.getElementById("mihop_c6").value;
const mihop_c7 = document.getElementById("mihop_c7").value;
// Mihop genikes ikanothtes
const mihop1_c1 = document.getElementById("mihop1_c1").value;
const mihop1_c2 = document.getElementById("mihop1_c2").value;
const mihop1_c3 = document.getElementById("mihop1_c3").value;
const mihop1_c4 = document.getElementById("mihop1_c4").value;
const mihop1_c5 = document.getElementById("mihop1_c5").value;
const mihop1_c6 = document.getElementById("mihop1_c6").value;
const mihop1_c7 = document.getElementById("mihop1_c7").value;

// Miper mathisiaka apotelesmata
const mhper_c1 = document.getElementById("mhper_c1").value;
const mhper_c2 = document.getElementById("mhper_c2").value;
const mhper_c3 = document.getElementById("mhper_c3").value;
const mhper_c4 = document.getElementById("mhper_c4").value;
const mhper_c5 = document.getElementById("mhper_c5").value;
const mhper_c6 = document.getElementById("mhper_c6").value;
const mhper_c7 = document.getElementById("mhper_c7").value;
// Miper genikes ikanothtes
const mhper1_c1 = document.getElementById("mhper1_c1").value;
const mhper1_c2 = document.getElementById("mhper1_c2").value;
const mhper1_c3 = document.getElementById("mhper1_c3").value;
const mhper1_c4 = document.getElementById("mhper1_c4").value;
const mhper1_c5 = document.getElementById("mhper1_c5").value;
const mhper1_c6 = document.getElementById("mhper1_c6").value;
const mhper1_c7 = document.getElementById("mhper1_c7").value;

// Armhh mathisiaka apotelesmata
const armhx_c1 = document.getElementById("armhx_c1").value;
const armhx_c2 = document.getElementById("armhx_c2").value;
const armhx_c3 = document.getElementById("armhx_c3").value;
const armhx_c4 = document.getElementById("armhx_c4").value;
const armhx_c5 = document.getElementById("armhx_c5").value;
const armhx_c6 = document.getElementById("armhx_c6").value;
const armhx_c7 = document.getElementById("armhx_c7").value;
// Armhh genikes ikanothtes
const armhx1_c1 = document.getElementById("armhx1_c1").value;
const armhx1_c2 = document.getElementById("armhx1_c2").value;
const armhx1_c3 = document.getElementById("armhx1_c3").value;
const armhx1_c4 = document.getElementById("armhx1_c4").value;
const armhx1_c5 = document.getElementById("armhx1_c5").value;
const armhx1_c6 = document.getElementById("armhx1_c6").value;
const armhx1_c7 = document.getElementById("armhx1_c7").value;

// mpd
var mpd = document.getElementById("myChartmpd").getContext('2d');
var myChartmpd = new Chart(mpd, {
    type: 'bar',
    data: {
        labels: ["1", "2", "3", "4", "5", "6","7"],
        datasets: [{
           
            data: [mpd_c1, mpd_c2, mpd_c3, mpd_c4, mpd_c5, mpd_c6, mpd_c7],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(0, 137, 132, .2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(200, 99, 132, .7)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: { display: false } ,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


// mpd
var mpd1 = document.getElementById("myChartmpd1").getContext('2d');
var myChartmpd1 = new Chart(mpd1, {
    type: 'bar',
    data: {
        labels: ["1", "2", "3", "4", "5", "6","7"],
        datasets: [{
            
            data: [mpd1_c1, mpd1_c2, mpd1_c3, mpd1_c4, mpd1_c5, mpd1_c6, mpd1_c7],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(0, 137, 132, .2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(200, 99, 132, .7)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: { display: false } ,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

// hmmy
var hmmy = document.getElementById("myCharthmmy").getContext('2d');
var myCharthmmy = new Chart(hmmy, {
    type: 'bar',
    data: {
        labels: ["1", "2", "3", "4", "5", "6","7"],
        datasets: [{
            
            data: [hmmy_c1, hmmy_c2, hmmy_c3, hmmy_c4, hmmy_c5, hmmy_c6, hmmy_c7],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(0, 137, 132, .2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(200, 99, 132, .7)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: { display: false } ,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var hmmy1 = document.getElementById("myCharthmmy1").getContext('2d');
var myCharthmmy1 = new Chart(hmmy1, {
    type: 'bar',
    data: {
        labels: ["1", "2", "3", "4", "5", "6","7"],
        datasets: [{
            
            data: [hmmy1_c1, hmmy1_c2, hmmy1_c3, hmmy1_c4, hmmy1_c5, hmmy1_c6, hmmy1_c7],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(0, 137, 132, .2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(200, 99, 132, .7)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: { display: false } ,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

// mixop
var mixop = document.getElementById("myChartmixop").getContext('2d');
var myChartmixop = new Chart(mixop, {
    type: 'bar',
    data: {
        labels: ["1", "2", "3", "4", "5", "6","7"],
        datasets: [{
            
            data: [mihop_c1, mihop_c2, mihop_c3, mihop_c4, mihop_c5, mihop_c6, mihop_c7],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(0, 137, 132, .2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(200, 99, 132, .7)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: { display: false } ,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var mixop1 = document.getElementById("myChartmixop1").getContext('2d');
var myChartmixop1 = new Chart(mixop1, {
    type: 'bar',
    data: {
        labels: ["1", "2", "3", "4", "5", "6","7"],
        datasets: [{
            
            data: [mihop_c1, mihop_c2, mihop_c3, mihop_c4, mihop_c5, mihop_c6, mihop_c7],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(0, 137, 132, .2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(200, 99, 132, .7)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: { display: false } ,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

// myChartmhper
var mhper = document.getElementById("myChartmhper").getContext('2d');
var myChartmhper = new Chart(mhper, {
    type: 'bar',
    data: {
        labels: ["1", "2", "3", "4", "5", "6","7"],
        datasets: [{
            
            data: [mhper_c1, mhper_c2, mhper_c3, mhper_c4, mhper_c5, mhper_c6, mhper_c7],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(0, 137, 132, .2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(200, 99, 132, .7)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: { display: false } ,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


// myChartmhper
var mhper1 = document.getElementById("myChartmhper1").getContext('2d');
var myChartmhper1 = new Chart(mhper1, {
    type: 'bar',
    data: {
        labels: ["1", "2", "3", "4", "5", "6","7"],
        datasets: [{
            
            data: [mhper1_c1, mhper1_c2, mhper1_c3, mhper1_c4, mhper1_c5, mhper1_c6, mhper1_c7],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(0, 137, 132, .2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(200, 99, 132, .7)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: { display: false } ,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

// myChartarmhx

var armhx = document.getElementById("myChartarmhx").getContext('2d');
var myChartarmhx = new Chart(armhx, {
    type: 'bar',
    data: {
        labels: ["1", "2", "3", "4", "5", "6","7"],
        datasets: [{
            
            data: [armhx_c1, armhx_c2, armhx_c3, armhx_c4, armhx_c5, armhx_c6, armhx_c7],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(0, 137, 132, .2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(200, 99, 132, .7)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: { display: false } ,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var armhx1 = document.getElementById("myChartarmhx1").getContext('2d');
var myChartarmhx1 = new Chart(armhx1, {
    type: 'bar',
    data: {
        labels: ["1", "2", "3", "4", "5", "6","7"],
        datasets: [{
            
            data: [armhx1_c1, armhx1_c2, armhx1_c3, armhx1_c4, armhx1_c5, armhx1_c6, armhx1_c7],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(0, 137, 132, .2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(200, 99, 132, .7)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: { display: false } ,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

















//pie
// var ctxP = document.getElementById("pieChart").getContext('2d');
// var myPieChart = new Chart(ctxP, {
//     type: 'pie',
//     data: {
//         labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
//         datasets: [{
//             data: [300, 50, 100, 40, 120],
//             backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
//             hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
//         }]
//     },
//     options: {
//         responsive: true,
//         legend: false
//     }
// });


//line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
        labels: ["1", "2", "3", "4", "5", "6", "7"],
        datasets: [{
                label: "ECE",
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2,
                data: [hmmy_c1, hmmy_c2, hmmy_c3, hmmy_c4, hmmy_c5, hmmy_c6, hmmy_c7]
            },
            {
                label: "ARCH",
                backgroundColor: [
                    'rgba(255, 205, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 205, 86)',
                ],
                data: [armhx_c1, armhx_c2, armhx_c3, armhx_c4, armhx_c5, armhx_c6, armhx_c7]
            },
            {
                label: "MRED",
                backgroundColor: [
                    'rgba(0, 137, 132, .2)',
                ],
                borderColor: [
                    'rgba(0, 10, 130, .7)',
                ],
                data: [mihop_c1, mihop_c2, mihop_c3, mihop_c4, mihop_c5, mihop_c6, mihop_c7]
            },
            {
                label: "PEM",
                backgroundColor: [
                    'rgba(0, 250, 220, .2)',
                ],
                borderColor: [
                    'rgba(0, 213, 132, .7)',
                ],
                data: [mpd_c1, mpd_c2, mpd_c3, mpd_c4, mpd_c5, mpd_c6, mpd_c7]
            },
            {
                label: "ENVENG",
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgb(54, 162, 235)',
                ],
                data: [mhper_c1, mhper_c2, mhper_c3, mhper_c4, mhper_c5, mhper_c6, mhper_c7]
            }
        ]
    },
    options: {
        responsive: true
    }
});


//line
var ctxL1 = document.getElementById("lineChart1").getContext('2d');
var myLineChart1 = new Chart(ctxL1, {
    type: 'line',
    data: {
        labels: ["1", "2", "3", "4", "5", "6", "7"],
        datasets: [{
                label: "ECE",
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2,
                data: [hmmy1_c1, hmmy1_c2, hmmy1_c3, hmmy1_c4, hmmy1_c5, hmmy1_c6, hmmy1_c7]
            },
            {
                label: "ARCH",
                backgroundColor: [
                    'rgba(255, 205, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 205, 86)',
                ],
                data: [armhx1_c1, armhx1_c2, armhx1_c3, armhx1_c4, armhx1_c5, armhx1_c6, armhx1_c7]
            },
            {
                label: "MRED",
                backgroundColor: [
                    'rgba(0, 137, 132, .2)',
                ],
                borderColor: [
                    'rgba(0, 10, 130, .7)',
                ],
                data: [mihop1_c1, mihop1_c2, mihop1_c3, mihop1_c4, mihop1_c5, mihop1_c6, mihop1_c7]
            },
            {
                label: "PEM",
                backgroundColor: [
                    'rgba(0, 250, 220, .2)',
                ],
                borderColor: [
                    'rgba(0, 213, 132, .7)',
                ],
                data: [mpd1_c1, mpd1_c2, mpd1_c3, mpd1_c4, mpd1_c5, mpd1_c6, mpd1_c7]
            },
            {   label: "ENVENG",
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgb(54, 162, 235)',
                ],
                data: [mhper1_c1, mhper1_c2, mhper1_c3, mhper1_c4, mhper1_c5, mhper1_c6, mhper1_c7]
            }
        ]
    },
    options: {
        responsive: true
    }
});


//radar
// var ctxR = document.getElementById("radarChart").getContext('2d');
// var myRadarChart = new Chart(ctxR, {
//     type: 'radar',
//     data: {
//         labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
//         datasets: [{
//             label: "My First dataset",
//             data: [65, 59, 90, 81, 56, 55, 40],
//             backgroundColor: [
//                 'rgba(105, 0, 132, .2)',
//             ],
//             borderColor: [
//                 'rgba(200, 99, 132, .7)',
//             ],
//             borderWidth: 2
//         }, {
//             label: "My Second dataset",
//             data: [28, 48, 40, 19, 96, 27, 100],
//             backgroundColor: [
//                 'rgba(0, 250, 220, .2)',
//             ],
//             borderColor: [
//                 'rgba(0, 213, 132, .7)',
//             ],
//             borderWidth: 2
//         }]
//     },
//     options: {
//         responsive: true
//     }
// });

//doughnut
// var ctxD = document.getElementById("doughnutChart").getContext('2d');
// var myLineChart = new Chart(ctxD, {
//     type: 'doughnut',
//     data: {
//         labels: ["1", "2", "3", "4", "5","6","7" ],
//         datasets: [{
//             data: [2, 3, 4, 5, 6,7,8],
//             backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360","#2BBBAD","#4285F4"],
//             hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774","#00695c","#0d47a1"]
//         }]
//     },
//     options: {
//         responsive: true
//     }
// });
// new WOW().init();

// Regular map
// function regular_map() {
//     var var_location = new google.maps.LatLng(40.725118, -73.997699);

//     var var_mapoptions = {
//         center: var_location,
//         zoom: 14
//     };

//     var var_map = new google.maps.Map(document.getElementById("map-container"),
//         var_mapoptions);

//     var var_marker = new google.maps.Marker({
//         position: var_location,
//         map: var_map,
//         title: "New York"
//     });
// }


// new Chart(document.getElementById("horizontalBar"), {
//     "type": "horizontalBar",
//     "data": {
//         "labels": ["Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey"],
//         "datasets": [{
//             "label": "My First Dataset",
//             "data": [22, 33, 55, 12, 86, 23, 14],
//             "fill": false,
//             "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
//                 "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)",
//                 "rgba(54, 162, 235, 0.2)",
//                 "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
//             ],
//             "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
//                 "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
//                 "rgb(201, 203, 207)"
//             ],
//             "borderWidth": 1
//         }]
//     },
//     "options": {
//         "scales": {
//             "xAxes": [{
//                 "ticks": {
//                     "beginAtZero": true
//                 }
//             }]
//         }
//     }
// });