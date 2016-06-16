/**
 * Created by PRIMA on 25.04.2016.
 */
$(document).ready(function(){
    var currentTab = getUrlParameter('tab_type');
    switch (currentTab) {
        case 'info':
            buildInfoObjects();
            break;
        case 'statistics':
            break;
        case 'throws':
            break;
        case 'video':
            break;
        case 'online':
            var matchProgressUpdater = new MatchProgressBuilder('match_progress_container');
            matchProgressUpdater.formMatchTable();
            break;
        default:
            buildInfoObjects();
            break;
    }
});

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

function buildInfoObjects() {
    window.tableBuilder = new TableBuilder('online_diagram');
    window.chartBuilder = new ChartBuilder('point_difference_chart', 'point_difference_histogram');
    google.charts.load('current', {packages: ['corechart', 'line', 'bar']});
    google.charts.setOnLoadCallback(function () {
        tableBuilder.updateTable();
        chartBuilder.updatePointDifferenceChart();
        chartBuilder.updateHistogramDifferenceChart();
        setInterval(function (){
            chartBuilder.updatePointDifferenceChart();
            chartBuilder.updateHistogramDifferenceChart();
            tableBuilder.updateTable();
        },5000);
    });
}