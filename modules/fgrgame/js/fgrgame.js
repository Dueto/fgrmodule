/**
 * Created by PRIMA on 25.04.2016.
 */
$(document).ready(function(){
    window.tableBuilder = new TableBuilder('#online_diagram');
    window.chartBuilder = new ChartBuilder('point_difference_chart', 'point_difference_histogram');
    google.charts.load('current', {packages: ['corechart', 'line', 'bar']});
    google.charts.setOnLoadCallback(function(){
        tableBuilder.updateTable();
        chartBuilder.updatePointDifferenceChart();
        chartBuilder.updateHistogramDifferenceChart();
        //setInterval(function (){
        //    chartBuilder.updatePointDifferenceChart();
        //    chartBuilder.updateHistogramDifferenceChart();
        //    tableBuilder.updateTable();
        //},5000);
    });
});
