/**
 * Created by PRIMA on 25.04.2016.
 */
TableBuilder = function(divId, gameId) {

    var self = {};

    self.matrix = null;
    self.maxDepth = null;
    self.data = null;
    self.divId = divId;
    self.columnsScore = [];
    self.teamALogo = null;
    self.teamBLogo = null;
    self.gameId = gameId;

    self.getGameOnlineInfo = function(callback) {
        $.ajax({
            url: "http://fgr.ntrlab.ru:81/api/Games/WithStats/" + self.gameId,
            success: function(data){
                self.destroy();
                self.clearDiv();
                if(data.Data == null) return;
                if(data.Data.GamePlays.length == null) return;
                var gamePlays = data.Data.GamePlays;
                var gameStarts = data.Data.GameStarts;
                var scoreTeamA = 0;
                var scoreTeamB = 0;
                self.data = [];
                for(var i = 0; i < gamePlays.length; i++) {
                    var event = gamePlays[i];
                    if(!self.isNeededEventType(event.PlayTypeId)) continue;
                    var eventPlayer = self.getPlayerByStartNum(event.StartNum, gameStarts);
                    if(eventPlayer == null) continue;
                    var TeamNumber = eventPlayer.TeamNum;
                    if(TeamNumber == 0) continue;
                    if(event.PlayTypeId == EventType.Goal.value) {
                        if(TeamNumber == 1) {
                            scoreTeamA++;
                        } else {
                            scoreTeamB++;
                        }
                    }
                    var TeamLogo = data.Data['GameTeam' + TeamNumber].CompTeam.Team.LogoId;
                    TeamLogo = TeamLogo == null ? '../files/fgrmodule/logo.png' : 'http://fgr.ntrlab.ru:81/api/Media/Image/' + TeamLogo;
                    var eventObj = {};
                    eventObj.team = TeamNumber;
                    eventObj.logo = TeamLogo;
                    eventObj.event = event.PlayTypeId;
                    eventObj.playerNumber = event.StartNum;
                    eventObj.score = scoreTeamA + ':' + scoreTeamB;
                    self.data.push(eventObj);
                }
                if(callback) callback();
            },
            fail: function(){
                console.log('server fail');
            }
        });
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
        self.getGameOnlineInfo(function(){
            if(self.data.length == 0) {
                $('#' + self.divId).append('Нет информации об онлайн ходе матча');
                return;
            }
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

            var teamAAdded = false;
            if(self.maxDepth.teamA < self.maxDepth.teamB) {
                for(var m = 0; m < additionalRows; m++) {
                    tableString += '<tr>'
                    if(m === 0) {
                        teamAAdded = true;
                        tableString += self.getTeamsRepresentation().teamAHtml;
                    }
                    for(var n = 0; n < columns; n++) {
                        tableString += '<td class="additional_rows"></td>';
                    }
                    tableString += '</tr>';
                }
            }
            for(var i = 0; i < self.matrix.length; i++) {
                if(i == self.maxDepth.teamA) {
                    tableString += '<tr style="border-bottom: 1px solid black;">';
                } else {
                    tableString += '<tr>';
                }
                if(i === 0 && !teamAAdded) tableString += self.getTeamsRepresentation().teamAHtml;
                if(self.maxDepth.teamA + 1 === i) tableString += self.getTeamsRepresentation().teamBHtml;
                self.matrix[i] = new Array(columns);
                for(var j = 0; j < self.matrix[i].length; j++) {
                    tableString += '<td class="no_padding" id="' + i + 'a' + j +'"></td>';
                }
                tableString += '</tr>';
            }

            if(self.maxDepth.teamA > self.maxDepth.teamB) {
                for(var m = 0; m < additionalRows; m++) {
                    tableString += '<tr>'
                    if(m === 0) {
                        tableString += '<td class="additional_rows"></td>'
                    }
                    for(var n = 0; n < self.matrix[0].length; n++) {
                        tableString += '<td class="additional_rows"></td>';
                    }
                    tableString += '</tr>';
                }
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
            case EventType.Goal.value:
                if(event.team === self.teamA) {
                    return '<div class="player_number_diagram team_a_number"><span>' + event.playerNumber + '</span></div>'
                } else {
                    return '<div class="player_number_diagram team_b_number"><span>' + event.playerNumber + '</span></div>'
                }
                break;
            case EventType.Shot_7m.value:
                if(event.team === self.teamA) {
                    return '<div class="player_number_diagram team_a_number"><span>' + event.playerNumber + '</span></div>'
                } else {
                    return '<div class="player_number_diagram team_b_number"><span>' + event.playerNumber + '</span></div>'
                }
                break;
            case EventType.YellowCard.value:
                return '<div class="player_number_diagram team_yellow"><span>' + event.playerNumber + '</span></div>'
                break;
            case EventType.RedCard.value:
                return '<div class="player_number_diagram team_delete"><span>' + event.playerNumber + '</span></div>'
                break;
            case EventType.BlueCard.value:
                return '<div class="player_number_diagram team_disqualified"><span>' + event.playerNumber + '</span></div>'
                break;
            case EventType.TimeOut.value:
                return '<div class="player_number_diagram team_timeout"><span>' + 'TA' + '</span></div>'
                break;
        }
    };

    self.isNeededEventType = function (id) {
        switch(id) {
            case EventType.Goal.value: return true; break;
            case EventType.Shot_7m.value: return true; break;
            case EventType.YellowCard.value: return true; break;
            case EventType.RedCard.value: return true; break;
            case EventType.BlueCard.value: return true; break;
            case EventType.TimeOut.value: return true; break;
            default: return false; break;
        }
    };

    self.getPlayerByStartNum = function (playerNumber, gameStarts) {
        for(var i = 0; i < gameStarts.length; i++) {
            if(gameStarts[i].StartNum == playerNumber) {
                return gameStarts[i];
            }
        }
        return null;
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
        self.buildTable(function(){
            self.fillTable();
        });
    };

    return self;
};