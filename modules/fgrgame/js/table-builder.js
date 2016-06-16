/**
 * Created by PRIMA on 25.04.2016.
 */
TableBuilder = function(divId) {

    var self = {};

    self.matrix = null;
    self.maxDepth = null;
    self.data = null;
    self.divId = divId;
    self.columnsScore = [];
    self.teamALogo = null;
    self.teamBLogo = null;

    self.getGameOnlineInfo = function(gameId, callback) {
        //$.ajax("")
        obj = [
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 13, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 23, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 6, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 78, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 87, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 12, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 65, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "team_delete", playerNumber: 12, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 78, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "team_disqualified", playerNumber: 11, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 11, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 43, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 32, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 11, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 54, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "team_yellow", playerNumber: 11, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "team_disqualified", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 13, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 23, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "team_delete", playerNumber: 6, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 78, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "team_yellow", playerNumber: 87, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 12, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 65, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "team_disqualified", playerNumber: 12, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 78, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 11, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 11, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "team_delete", playerNumber: 43, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 32, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 11, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 54, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 11, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "team_timeout", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "team_yellow", playerNumber: 11, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "team_disqualified", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 13, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 23, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "team_delete", playerNumber: 6, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 78, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "team_yellow", playerNumber: 87, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 12, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 65, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "team_disqualified", playerNumber: 12, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 78, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 11, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 11, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "team_delete", playerNumber: 43, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 32, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 11, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 54, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 11, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "goal", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"},
            {team: 2, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI",event: "goal", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"},
            {team: 1, logo: "http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF",event: "team_timeout", playerNumber: 67, dateTime: "2016.06.18", score: "2:3"}
        ];
        self.data = obj;
        if(callback) callback();
    };

    self.getMaxDepth = function(eventsArray) {
        var teamA = eventsArray[0].team;
        self.teamALogo = eventsArray[0].logo;
        var teamB = null;
        for(var i = 0; i < eventsArray.length; i++) {
            if(teamA != eventsArray[i].team) {
                teamB = eventsArray[i].team;
                self.teamBLogo = eventsArray[i].logo;
                break;
            }
        }
        self.teamA = teamA;
        self.teamB = teamB;

        var previousEvent = eventsArray[0];
        var maxDepth = {teamA: 0, teamB: 0, differencesCount: 0};
        var teamASearcher = 0;
        var teamBSearcher = 0;

        for(var i = 1; i < eventsArray.length; i++) {
            var event = eventsArray[i];
            if(event.team != previousEvent.team) {
                maxDepth.differencesCount++;
                self.columnsScore.push(previousEvent.score);
                teamASearcher = 0;
                teamBSearcher = 0;
            }
            if(event.team === previousEvent.team && event.team === teamA) teamASearcher++;
            maxDepth.teamA = maxDepth.teamA < teamASearcher ? teamASearcher : maxDepth.teamA;

            if(event.team === previousEvent.team && event.team === teamB) teamBSearcher++;
            maxDepth.teamB = maxDepth.teamB < teamBSearcher ? teamBSearcher : maxDepth.teamB;
            previousEvent = event;
        }
        self.columnsScore.push(previousEvent.score);

        return maxDepth;
    };

    self.buildTable = function(callback) {
        self.getGameOnlineInfo(1, function(){
            self.maxDepth = self.getMaxDepth(self.data);
            var rows = self.maxDepth.teamA + 1 + self.maxDepth.teamB + 1;
            var additionalRows = 0;
            if(self.maxDepth.teamA > self.maxDepth.teamB) {
                additionalRows = self.maxDepth.teamA - self.maxDepth.teamB;
            } else {
                additionalRows = self.maxDepth.teamB - self.maxDepth.teamA;
            }
            var columns = self.maxDepth.differencesCount + 1;
            self.matrix = new Array(rows);
            var tableString = '<table class="diagram"><tbody>';
            for(var i = 0; i < self.matrix.length; i++) {
                tableString += '<tr>';

                if(i === 0) tableString += self.getTeamsRepresentation().teamAHtml;
                if(self.maxDepth.teamA + 1 === i) tableString += self.getTeamsRepresentation().teamBHtml;
                self.matrix[i] = new Array(columns);
                for(var j = 0; j < self.matrix[i].length; j++) {
                    tableString += '<td class="no_padding" id="' + i + 'a' + j +'"></td>';
                }
                tableString += '</tr>';
            }

            for(var m = 0; m < additionalRows; m++) {
                tableString += '<tr>'
                if(i === 0) {
                    tableString += '<td class="additional_rows"></td>'
                }
                for(var n = 0; n < self.matrix[0].length; n++) {
                    tableString += '<td class="additional_rows"></td>';
                }
                tableString += '</tr>';
            }
            tableString += '</tbody>';

            tableString += '<tfoot><tr><td></td><td><span>Счет</span></td>';
            for(var i = 0; i < self.columnsScore.length; i++) {
                tableString += '<td class="diagram_score">' + self.columnsScore[i] + '</td>';
            }
            tableString += '</tr></tfoot>';

            tableString += '</table>';
            $('#' + self.divId).append(tableString);
            if(callback) callback();
        });
    };

    self.getTeamsRepresentation = function() {
        var rows = self.maxDepth.teamA + 1 + self.maxDepth.teamB + 1;
        var additionalRows = 0;
        if(self.maxDepth.teamA > self.maxDepth.teamB) {
            additionalRows = self.maxDepth.teamA - self.maxDepth.teamB;
        } else {
            additionalRows = self.maxDepth.teamB - self.maxDepth.teamA;
        }
        var rowSpan = (rows + additionalRows) / 2;
        return {teamAHtml: '<td rowspan="' + rowSpan + '" colspan="2" style="border-right:1px solid black;">' +
                '<img src="' + self.teamALogo + '">' +
                '</td>',
                teamBHtml: '<td rowspan="' + rowSpan + '" colspan="2" style="border-right:1px solid black;">' +
                '<img src="' + self.teamBLogo + '">' +
                '</td>'}
    };

    self.getEventRepresentation = function (event) {
        switch (event.event) {
            case 'goal':
                if(event.team === self.teamA) {
                    return '<div class="player_number_diagram team_a_number"><span>' + event.playerNumber + '</span></div>'
                } else {
                    return '<div class="player_number_diagram team_b_number"><span>' + event.playerNumber + '</span></div>'
                }
                break;
            case 'team_yellow':
                return '<div class="player_number_diagram team_yellow"><span>' + event.playerNumber + '</span></div>'
                break;
            case 'team_delete':
                return '<div class="player_number_diagram team_delete"><span>' + event.playerNumber + '</span></div>'
                break;
            case 'team_disqualified':
                return '<div class="player_number_diagram team_disqualified"><span>' + event.playerNumber + '</span></div>'
                break;
            case 'team_timeout':
                return '<div class="player_number_diagram team_timeout"><span>' + 'TA' + '</span></div>'
                break;
        }
    };

    self.fillTable = function () {
        var previousEvent = self.data[0];
        var x = self.maxDepth.teamA;
        var z = 0;
        $('#' + x + 'a' + z + '').append(self.getEventRepresentation(previousEvent));
        for(var i = 1; i < self.data.length; i++) {

            var event = self.data[i];

            var eventHtml = self.getEventRepresentation(event);

            if(event.team !== previousEvent.team) {
                if(event.team === self.teamA) {
                    x = self.maxDepth.teamA;
                } else {
                    x = self.maxDepth.teamA + 1;
                }
                z++;
                $('#' + x + 'a' + z + '').append(eventHtml).addClass();
                previousEvent = event;
                continue;
            }

            if(event.team === previousEvent.team && event.team === self.teamA) {
                x--;
                $('#' + x + 'a' + z + '').append(eventHtml);
                previousEvent = event;
                continue;
            }

            if(event.team === previousEvent.team && event.team === self.teamB) {
                x++;
                $('#' + x + 'a' + z + '').append(eventHtml);
                previousEvent = event;
            }
        }
    };

    self.clearDiv = function () {
        $('#' + self.divId).empty();
    };

    self.destroy = function() {
        self.matrix = null;
        self.maxDepth = null;
        self.data = null;
        self.columnsScore = [];
    };

    self.updateTable = function() {
        self.destroy();
        self.clearDiv();
        self.buildTable(function(){
            self.fillTable();
        });
    };

    return self;
};