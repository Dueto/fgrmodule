/**
 * Created by PRIMA on 25.04.2016.
 */
ChartBuilder = function(pointChartDiv, histogramChartDiv, gameId) {

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
    self.gameId = gameId;

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
        $.ajax({
            url: "http://fgr.ntrlab.ru:81/api/Games/WithStats/" + self.gameId,
            success: function(data){
                if(data.Data == null) return;
                if(data.Data.GamePlays.length == null) return;
                var gamePlays = data.Data.GamePlays;
                var gameStarts = data.Data.GameStarts;
                var scoreTeamA = 0;
                var scoreTeamB = 0;
                self.data = [];
                for(var i = 0; i < gamePlays.length; i++) {
                    var event = gamePlays[i];
                    if(event.PlayTypeId == EventType.Goal.value) {
                        var eventPlayer = self.getPlayerByStartNum(event.StartNum, gameStarts);
                        var TeamNumber = eventPlayer.TeamNum;
                        if(TeamNumber == 0) continue;
                        var pointData = null;
                        if(TeamNumber == 1) {
                            scoreTeamA++;
                        } else {
                            scoreTeamB++;
                        }
                        pointData = [i, scoreTeamA, scoreTeamB];
                        self.data.push(pointData);
                    }
                }
                console.log(self.data);
                if(callback) callback();
            },
            fail: function(){
                console.log('server fail');
            }
        });
    };

    self.getPlayerByStartNum = function (playerNumber, gameStarts) {
        for(var i = 0; i < gameStarts.length; i++) {
            if(gameStarts[i].StartNum == playerNumber) {
                return gameStarts[i];
            }
        }
        return null;
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