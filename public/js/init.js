$( document ).ready(function() {

    // Initialize sidenav button
    $(".button-collapse").sideNav();

    // Date Picker for Registration
    $('.datepicker').pickadate();

    $('.mdb-select').material_select();

});

$(function () {

    // Data for Media Chart
    var data = [
        {
            value: 300,
            color:"#F7464A",
            highlight: "#FF5A5E",
            label: "Movies"
        },
        {
            value: 50,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Vinyl"
        },
        {
            value: 100,
            color: "#FDB45C",
            highlight: "#FFC870",
            label: "Video Games"
        },
        {
            value: 40,
            color: "#949FB1",
            highlight: "#A8B3C5",
            label: "Books"
        }
    ];


    // Makes chart responsive
    var option = {
        responsive: true,
    };

    // Get the context of the canvas element we want to select
    var ctx = document.getElementById("media_chart").getContext('2d');

    //Defines type of the chart.
    var myDoughnutChart = new Chart(ctx).Doughnut(data,option);
});