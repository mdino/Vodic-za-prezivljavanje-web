function ucitajBrojUspjesnih() {
    $('#canvas2').html("");
    // $('a').unbind();            

    $.ajax({
        type: "GET",
        url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=15",
        dataType: "xml",
        success: function (xml) {
            var array = [];
            var i = 0;

            var doughnutData = [
                {
                    value: 0,
                    color: "#F7464A",
                    highlight: "#FF5A5E",
                    label: ""
                },
                {
                    value: 0,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: ""
                },
                {
                    value: 0,
                    color: "#FDB45C",
                    highlight: "#FFC870",
                    label: ""
                },
                {
                    value: 0,
                    color: "#949FB1",
                    highlight: "#A8B3C5",
                    label: ""
                },
                {
                    value: 0,
                    color: "#4D5360",
                    highlight: "#616774",
                    label: ""
                }
            ];

            $(xml).find('korisnici').each(function () {

                $(this).find('korisnik').each(function () {
                    var broj = $(this).find('broj').html();
                    var user = $(this).find('user').html();
                    doughnutData[i].value = broj;
                    doughnutData[i].label = user;
                    i++;

                });
                var ctx2 = document.getElementById("canvas2").getContext("2d");
                window.myBar = new Chart(ctx2).Doughnut(doughnutData, {
                    responsive: true
                });

            });

        }
    });
}

function ucitajBrojNeuspjesnih() {
    $('#canvas2').html("");
    // $('a').unbind();
    $.ajax({
        type: "GET",
        url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=15",
        dataType: "xml",
        success: function (xml) {
            var array = [];
            var i = 0;

            var barChartData = {
                labels: ["", "", "", "", ""],
                datasets: [
                    {
                        fillColor: "rgba(220,220,220,0.5)",
                        strokeColor: "rgba(220,220,220,0.8)",
                        highlightFill: "rgba(220,220,220,0.75)",
                        highlightStroke: "rgba(220,220,220,1)",
                        data: [0, 0, 0, 0, 0]
                    }
                ]
            }

            $(xml).find('korisnici').each(function () {

                $(this).find('korisnik').each(function () {
                    var broj = $(this).find('broj').html();
                    var user = $(this).find('user').html();
                    barChartData.labels[i] = user;
                    barChartData.datasets[0].data[i] = broj;
                    i++;

                });

                var ctx = document.getElementById("canvas").getContext("2d");
                window.myBar = new Chart(ctx).Bar(barChartData, {
                    responsive: true
                });

            });

        }
    });
}

function ucitajBrojModeratoraPoPodrucjima() {
    $('#canvas3').html("");
    // $('a').unbind();
    $.ajax({
        type: "GET",
        url: "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/ajax/admin.php?id=17",
        dataType: "xml",
        success: function (xml) {
            var array = [];
            var i = 0;

            var radarChartData = {
                labels: ["", "", "", "", ""],
                datasets: [
                    {
                        label: "Broj moderatora po područjima",
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [0, 0, 0, 0, 0]
                    }
                ]
            };

            $(xml).find('korisnici').each(function () {

                $(this).find('korisnik').each(function () {
                    var broj = $(this).find('broj').html();
                    var user = $(this).find('user').html();
                    radarChartData.labels[i] = user;
                    radarChartData.datasets[0].data[i] = broj;
                    i++;

                });

                var ctx3 = document.getElementById("canvas3").getContext("2d");

                window.myBar = new Chart(ctx3).Radar(radarChartData, {
                    responsive: true
                });

            });

        }
    });
}
///////////////////////////////////////
///////////////////////////////////////
window.onload = function () {
    ucitajBrojNeuspjesnih();
    ucitajBrojUspjesnih();
    ucitajBrojModeratoraPoPodrucjima();
}