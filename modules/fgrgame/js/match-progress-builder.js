/**
 * Created by PRIMA on 25.04.2016.
 */
MatchProgressBuilder = function(divId) {

    var self = {};

    self.divId = divId;
    self.data = null;

    self.getMatchEvents = function(id, callback) {
        obj = [
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'red_card', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'timeout', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Таймаут"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'timeout', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Таймаут"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'timeout', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Таймаут"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'goal', minute: 18, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 11, eventData: { description: "Гол"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'yellow_card', minute: 20, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Желтая карточка"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: '2m', minute: 29, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 18, eventData: { description: "Два метра"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 1, score: '12-14', eventType: 'defend', minute: 30, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 15, eventData: { description: "Защита"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'attack', minute: 32, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 9, eventData: { description: "Атака"}},
            {playerName: 'Петр Звездный', id: 123123, teamEvent: 2, score: '12-14', eventType: 'red_card', minute: 54, teamA: {id: 2, logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logotip_kaustik.png?itok=fWzzBqBF'}, teamB: { logo: 'http://localhost:8181/fgr/rushandball.ru/files/styles/team_logo/public/logo.png?itok=1TFMmFpI', id: 1}, playerNumber: 16, eventData: { description: "Красная карточка"}}
        ];
        self.data = obj;
        if(callback) callback();
    };

    self.formMatchTable = function() {
        self.getMatchEvents(1, function(){
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
            if(event.eventType !== 'timeout') {
                html +='<tr date-time="' + event.minute + '"> ' +
                    '<td class="team_image">' + '<img src="' + teamEventLogo + '">' + '</td>' +
                    '<td class="minute">' + event.minute + '\'</td>' +
                    '<td class="event_icon">' + eventLogo + '</td>' +
                    '<td class="player_number"><div class="' + tshirtClass + '">' + event.playerNumber + '</div></td>' +
                    '<td class="details"><span class="bold">' + event.playerNumber + '. ' + event.playerName + '</span></br>' +
                    '<span>' + event.eventData.description + '</span></td>' +
                    '</tr> ';
                if(event.eventType === 'goal') {
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
            case 'goal':
                return '<img src="../files/fgrmodule/goal.png">';
                break;
            case 'yellow_card':
                return '<img src="../files/fgrmodule/yellowcard.png">';
                break;
            case '2m':
                return '<img src="../files/fgrmodule/2m.png">';
                break;
            case 'defend':
                return '<img src="../files/fgrmodule/shield.png">';
                break;
            case 'attack':
                return '<img src="../files/fgrmodule/attack.png">';
                break;
            case 'red_card':
                return '<img src="../files/fgrmodule/redcard.png">';
                break;
            case 'timeout':
                return '<img src="../files/fgrmodule/timeout.png">';
                break;
        }
    };

    return self;
};
