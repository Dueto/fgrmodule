/**
 * Created by PRIMA on 25.04.2016.
 */
EventType = {
        TimerTic: { value: 0, description: "Событие таймера"},
        PeriodStart: { value: 1, description: "Начало периода"},
        PeriodFinish: { value: 2, description: "Окончание периода"},
        PenaltySeries: { value: 21, description: "Серия пенальти"},
        PenaltySeriesFinish: { value: 22, description: "Окончание серии пенальти"},
        TimeOut: { value: 3, description: "Тайм-аут"},
        Possession: { value: 4, description: "Владение"},
        GoalkeeperOnCourt: { value: 6, description: "Вратарь на площадке"},
        Substitution: { value: 7, description: "Замена"},
        SubsIn: { value: 8, description: "Выход"},
        SubsOut: { value: 9, description: "Уход"},
        Goal: { value: 10, description: "Гол"},
        Goal_LeftUp: { value: 11, description: "Левая девятка"},
        Goal_CenterUp: { value: 12, description: "Центр-Верх"},
        Goal_RightUp: { value: 13, description: "Правая девятка"},
        Goal_LeftMiddle: { value: 14, description: "Левая середина"},
        Goal_CenterMiddle: { value: 15, description: "Центр"},
        Goal_RightMiddle: { value: 16, description: "Правая середина"},
        Goal_LeftDown: { value: 17, description: "Левый низ"},
        Goal_CenterDown: { value: 18, description: "Центр-Низ"},
        Goal_RightDown: { value: 19, description: "Правый низ"},
        Save: { value: 20, description: "Сейв"},
        MissedGoal: { value: 29, description: "Пропущенный гол"},
        Shot: { value: 30, description: "Бросок"},
        Shot_Corner_Left: { value: 31, description: "Бросок УЛ"},
        Shot_Corner_Right: { value: 32, description: "Бросок УП"},
        Shot_From_Line: { value: 33, description: "Бросок 6м"},
        Shot_Close_Left: { value: 34, description: "Бросок БЛ"},
        Shot_Close_Center: { value: 35, description: "Бросок БЦ"},
        Shot_Close_Right: { value: 36, description: "Бросок БП"},
        Shot_Long_Left: { value: 37, description: "Бросок ДЛ"},
        Shot_Long_Center: { value: 38, description: "Бросок ДЦ"},
        Shot_Long_Right: { value: 39, description: "Бросок ДП"},
        Shot_7m: { value: 40, description: "7-метровый бросок"},
        OffTarget: { value: 41, description: "Мимо"},
        Goalpost: { value: 42, description: "Штанга"},
        Block: { value: 43, description: "Блок"},
        Penalty7: { value: 44, description: "7-метровый"},
        Turnover: { value: 50, description: "Потеря"},
        Turnover_Ball: { value: 51, description: "Потеря мяча"},
        Turnover_Error: { value: 52, description: "Ошибка"},
        Turnover_OnPlayer: { value: 53, description: "На игрока"},
        Turnover_Passive: { value: 54, description: "Пассивное нападение"},
        Turnover_Travel: { value: 55, description: "Пробежка"},
        Pass: { value: 60, description: "Пас"},
        Steal: { value: 61, description: "Перехват"},
        Rebound: { value: 62, description: "Подбор"},
        PositionalAttack: { value: 70, description: "Позиционная атака"},
        FastBreak: { value: 71, description: "Контратака"},
        FastBreak_1x1: { value: 72, description: "Контратака 1х1"},
        FastStart: { value: 73, description: "Быстрый старт"},
        YellowCard: { value: 81, description: "Желтая карточка"},
        TwoMinutes: { value: 82, description: "2 минуты"},
        RedCard: { value: 83, description: "Красная карточка"},
        BlueCard: { value: 84, description: "Синяя карточка"},
        TeamTwoMinutes: { value: 85, description: "Командные 2 минуты"},
        Final: { value: 100, description: "Матч окончен"},
        Unknown: { value: 1000, description: "Ошибочное событие"}
};

$(document).ready(function(){
    var currentTab = getUrlParameter('tab_type');
    var gameId = getUrlParameter('game_id');
    switch (currentTab) {
        case 'info':
            buildInfoObjects(gameId);
            break;
        case 'statistics':
            break;
        case 'throws':
            break;
        case 'video':
            break;
        case 'online':
            var matchProgressUpdater = new MatchProgressBuilder('match_progress_container', gameId);
            matchProgressUpdater.formMatchTable();
            break;
        default:
            buildInfoObjects(gameId);
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

function buildInfoObjects(gameId) {
    window.tableBuilder = new TableBuilder('online_diagram', gameId);
    window.chartBuilder = new ChartBuilder('point_difference_chart', 'point_difference_histogram', gameId);
    google.charts.load('current', {packages: ['corechart', 'line', 'bar']});
    google.charts.setOnLoadCallback(function () {
        tableBuilder.updateTable();
        chartBuilder.updatePointDifferenceChart();
        chartBuilder.updateHistogramDifferenceChart();
        setInterval(function (){
            chartBuilder.updatePointDifferenceChart();
            chartBuilder.updateHistogramDifferenceChart();
            //tableBuilder.updateTable();
        },5000);
    });
}