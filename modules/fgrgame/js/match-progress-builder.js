/**
 * Created by PRIMA on 25.04.2016.
 */
MatchProgressBuilder = function(divId, gameId) {

    var self = {};

    self.divId = divId;
    self.data = null;

    self.gameId = gameId;

    self.getMatchEvents = function(callback) {
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
                    var teamALogo = data.Data['GameTeam1'].CompTeam.Team.LogoId;
                    teamALogo = teamALogo == null ? '../files/fgrmodule/logo.png' : 'http://fgr.ntrlab.ru:81/api/Media/Image/' + teamALogo;
                    var teamBLogo = data.Data['GameTeam2'].CompTeam.Team.LogoId;
                    teamBLogo = teamBLogo == null ? '../files/fgrmodule/logo.png' : 'http://fgr.ntrlab.ru:81/api/Media/Image/' + teamBLogo;
                    var eventObj = {};
                    eventObj.playerName = eventPlayer.FirstName + ' ' + eventPlayer.LastName;
                    eventObj.id = event.PlayNum;
                    eventObj.teamEvent = TeamNumber;
                    eventObj.eventType = event.PlayTypeId;
                    //todo change to the real minute
                    eventObj.minute = i;
                    eventObj.teamA = {id: 2, logo: teamALogo};
                    eventObj.teamB = {id: 1, logo: teamBLogo};
                    eventObj.playerNumber = eventPlayer.StartNum;
                    eventObj.eventData = { description: self.getEventDescriptionById(event.PlayTypeId) };
                    eventObj.score = scoreTeamA + '-' + scoreTeamB;
                    self.data.push(eventObj);
                }
                console.log(self.data);
                if(callback) callback();
            },
            fail: function(){
                console.log('server fail');
            }
        });
        //obj = [
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'red_card', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'timeout', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Таймаут"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'timeout', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Таймаут"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'timeout', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Таймаут"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
        //    {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'red_card', minute: 54, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 16, eventData: { description: "Красная карточка"}}
        //];
        //self.data = obj;
        //if(callback) callback();
    };

    self.formMatchTable = function() {
        self.getMatchEvents(function(){
            var html = self.formHtmlFromEvents(self.data);
            $('#' + self.divId).prepend(html);
        });
    };

    self.formHtmlFromEvents = function (events) {
        var html = '<table class="progress_table">';
        for(var i = 0; i < events.length; i++) {
            var event = events[i];
            var eventLogo = self.getEventLogo(event);
            var teamEventLogo = '';
            var tshirtClass = '';
            if(event.teamEvent === event.teamA.id){
                teamEventLogo = event.teamA.logo;
                tshirtClass = 'team_a_tshirt';
            } else {
                teamEventLogo = event.teamB.logo;
                tshirtClass = 'team_b_tshirt';
            }
            if(event.eventType !== EventType.TimeOut.value) {
                html +='<tr date-time="' + event.minute + '"> ' +
                    '<td class="team_image">' + '<img src="' + teamEventLogo + '">' + '</td>' +
                    '<td class="minute">' + event.minute + '\'</td>' +
                    '<td class="event_icon">' + eventLogo + '</td>' +
                    '<td class="player_number"><div class="' + tshirtClass + '">' + event.playerNumber + '</div></td>' +
                    '<td class="details"><span class="bold">' + event.playerNumber + '. ' + event.playerName + '</span></br>' +
                    '<span>' + event.eventData.description + '</span></td>' +
                    '</tr> ';
                if(event.eventType === EventType.Goal.value) {
                    html += '<tr>' +
                        '<td class="score_progress_table" colspan="5">' +
                        '<div>' +
                        '<img src="' + event.teamA.logo + '"/>' +
                        '<span>' + event.score + '</span>' +
                        '<img src="' + event.teamB.logo + '"/>' +
                        '</div>' +
                        '</td>' +
                        '</tr>'
                }
            } else {
                html +='<tr> ' +
                    '<td class="minute">' + event.minute + '\'</td>' +
                    '<td class="event_icon">' + eventLogo + '</td>' +
                    '<td></td>' +
                    '<td class="team_image">' + '<img src="' + teamEventLogo + '">' + '</td>' +
                    '<td class="details">' + event.eventData.description + '</td>' +
                    '</tr> ';
            }
        }
        html += '</table>'
        return html;
    };

    self.getEventLogo = function(event) {
        switch (event.eventType) {
            case EventType.Goal.value:
                return '<img src="../files/fgrmodule/goal.png">';
                break;
            case EventType.YellowCard.value:
                return '<img src="../files/fgrmodule/yellowcard.png">';
                break;
            case EventType.Turnover_Travel.value:
                return '<img src="../files/fgrmodule/2m.png">';
                break;
            case EventType.Block.value:
                return '<img src="../files/fgrmodule/shield.png">';
                break;
            case EventType.Steal.value:
                return '<img src="../files/fgrmodule/shield.png">';
                break;
            case EventType.PositionalAttack.value:
                return '<img src="../files/fgrmodule/attack.png">';
                break;
            case EventType.FastBreak.value:
                return '<img src="../files/fgrmodule/attack.png">';
                break;
            case EventType.FastBreak_1x1.value:
                return '<img src="../files/fgrmodule/attack.png">';
                break;
            case EventType.RedCard.value:
                return '<img src="../files/fgrmodule/redcard.png">';
                break;
            case EventType.TimeOut.value:
                return '<img src="../files/fgrmodule/timeout.png">';
                break;
            default:
                return '';
                break;
        }
    };

    self.getEventDescriptionById = function(id) {
        var eventTypes = EventType;
        for(var type in eventTypes) {
            if(eventTypes[type].value == id) {
                return eventTypes[type].description;
            }
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

    return self;
};
