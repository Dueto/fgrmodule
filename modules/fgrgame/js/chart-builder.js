/**
 * Created by PRIMA on 25.04.2016.
 */
ChartBuilder = function(pointChartDiv, histogramChartDiv) {

    var self = {};

    //Chart object
    self.pointsChart = null;
    self.histagramChart = null;

    //Data in different format
    self.pointsDataTable = null;
    self.histogramDataTable = null;
    self.histogramData = null;
    self.data = null;
    self.rawData = null;

    self.teamA = {};
    self.teamB = {};

    //DivId
    self.pointChartDiv = pointChartDiv;
    self.histogramChartDiv = histogramChartDiv;

    self.pointDifferenceOptions = {
        title: 'Онлайн счет - диаграмма',
        legend: {
            position: 'bottom'
        },
        width : 710,
        height: 400,
        pointSize: 5,
        curveType: 'function',
        chartArea: {
            width: '90%',
            height: '80%'
        },
        vAxis: {
            viewWindowMode: "explicit",
            viewWindow:{
                min: 0
            }
        },
        interpolateNulls: true
    };

    self.pointDifferenceHistogramOptions = {
        hAxis: {
            title: 'Время'
        },
        vAxis: {
            title: 'Разница в очках'
        },
        title: 'Онлайн счет - разница',
        bars: 'vertical',
        width : 710,
        height: 400,
        legend: {
            position: 'none'
        },
        chartArea: {
            width: '85%',
            height: '80%'
        },
        bar: {
            groupWidth: '70%'
        }
    };

    self.updatePointDifferenceChart = function() {
        if(self.pointsChart!== null) {
            self.initPointDataTable(function() {
                self.drawPointChart();
            });
        } else {
            self.initPointDataTable(function() {
                self.initPointChart();
                self.drawPointChart();
            });
        }
    };

    self.initPointDataTable = function(callback) {
        self.updateData(function(){
            self.pointsDataTable = new google.visualization.DataTable();
            self.pointsDataTable.addColumn('number', 'Минута');
            self.pointsDataTable.addColumn('number', self.teamA.name);
            self.pointsDataTable.addColumn('number', self.teamB.name);
            self.pointsDataTable.addRows(self.data);
            if(callback) callback();
        });
    };

    self.initPointChart = function() {
        self.pointsChart= new google.visualization.LineChart(document.getElementById(self.pointChartDiv));
    };

    self.drawPointChart = function() {
        if(self.pointsChart!== null) self.pointsChart.draw(self.pointsDataTable, self.pointDifferenceOptions);
    };

    self.updateData = function(callback) {
        self.teamA = {name: "Каустик"};
        self.teamB = {name: "Медведи"};
        self.data = [
            [0, 0, 0],    [1, 40, 5],   [2, 23, 40],  [3, 17, 40],   [4, 40, 10],  [5, 9, 40],
            [6, 11, 3],   [7, 40, 19],  [8, 33, 40],  [9, 40, 32],  [10, 32, 24], [11, 35, 27],
            [12, 30, 22], [13, 40, 32], [14, 42, 34], [15, 47, 39], [16, 44, 36], [17, 48, 40],
            [18, 52, 44], [19, 54, 46], [20, 42, 34], [21, 55, 47], [22, 56, 48], [23, 57, 49],
            [24, 60, 52], [25, 50, 42], [26, 52, 44], [27, 51, 43], [28, 49, 41], [29, 53, 45],
            [30, 55, 47], [31, 60, 52], [32, 61, 53], [33, 59, 51], [34, 62, 54], [35, 65, 57],
            [36, 62, 54], [37, 58, 50], [38, 55, 47], [39, 61, 53], [40, 64, 56], [41, 65, 57],
            [42, 63, 55], [43, 66, 58], [44, 67, 59], [45, 69, 61], [46, 69, 61], [47, 70, 62],
            [48, 72, 64], [49, 68, 60], [50, 66, 58], [51, 65, 57], [52, 67, 59], [53, 70, 62],
            [54, 71, 63], [55, 72, 64], [56, 73, 65], [57, 75, 67], [58, 70, 62], [59, 68, 60],
            [60, 64, 56], [61, 60, 52], [62, 65, 57], [63, 67, 59], [64, 68, 60], [65, 69, 61],
            [66, 70, 62], [67, 72, 64], [68, 75, 67], [69, 80, 72]
        ];
        if(callback) callback();
    };


    self.updateHistogramDifferenceChart = function() {
        if(self.histagramChart!== null) {
            self.initHistogramDataTable(function(){
                self.drawHistogramChart();
            });
        } else {
            self.initHistogramDataTable(function(){
                self.initHistogramChart();
                self.drawHistogramChart();
            });
        }
    };
    
    self.initHistogramDataTable = function(callback) {
        self.updateData(function(){
            self.prepareHistogramData();
            self.histogramDataTable = new google.visualization.DataTable();
            self.histogramDataTable.addColumn('number', 'Минута');
            self.histogramDataTable.addColumn('number', 'Разница в очках');
            self.histogramDataTable.addColumn({type: 'string', role: 'style'});
            self.histogramDataTable.addRows(self.histogramData);
            if(callback) callback();
        });
    };

    self.prepareHistogramData = function() {
        self.histogramData = new Array(self.data.length);
        for(var i = 0; i < self.data.length; i++) {
            self.histogramData[i] = [self.data[i][0], self.data[i][1] - self.data[i][2]];
            if(self.histogramData[i][1] < 0) {
                self.histogramData[i].push('color: #ec1c24')
            } else {
                self.histogramData[i].push('color: #227fbf')
            }
        }

    };

    self.initHistogramChart = function() {
        self.histagramChart = new google.visualization.ColumnChart(document.getElementById(self.histogramChartDiv));
    };

    self.drawHistogramChart = function() {
        if(self.histagramChart!== null) self.histagramChart.draw(self.histogramDataTable, self.pointDifferenceHistogramOptions);
    };


    return self;
};