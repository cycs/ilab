var now = Date.now();
var weekAgo = now - 7*24*60*60;
var cityId = '2800482';
var appid = '4ec354bf7618b918b892cb5a439ee431';

console.log(now);
var currentMeteo = `http://api.openweathermap.org/data/2.5/weather?id=${cityId}&appid=${appid}&units=metric`;
var forecastMeteo = `http://api.openweathermap.org/data/2.5/forecast?id=${cityId}&appid=${appid}&units=metric`;

console.log(forecastMeteo);

var currentFetch = fetch(currentMeteo).then(blob => blob.json()).then(data => {
    console.log(data);
    document.querySelector('.meteo--temp').innerHTML = `${data.main.temp}°C`;
});
var forecastFetch = fetch(forecastMeteo).then(blob => blob.json()).then(data => {
    let list = data.list;
    console.log(data);
    let rain = Math.round(list.reduce((a,b) => {
        return b.rain && b.rain['3h'] ? a + b.rain['3h'] : a + 0;
    }, 0));


    console.log(`Il y a eu ${rain} millimètres de précipitations sur les 5 derniers jours.`);
});

function timeOut(){
    var month;
    var time = new Date();

    /*switch(time.getMonth()){
        case 1: month = 'Janvier';
            break;
        case 2: month = 'Février';
            break;
        case 3: month = 'Mars';
            break;
        case 4: month = 'Avril';
            break;
        case 5: month = 'Mai';
            break;
        case 6: month = 'Juin';
            break;
        case 7: month = 'Juillet';
            break;
        case 8: month = 'Août';
            break;
        case 9: month = 'Septembre';
            break;
        case 10: month = 'Octobre';
            break;
        case 11: month = 'Novembre';
            break;
        case 12: month = 'Décembre';
            break;
    }*/
    document.querySelector('.meteo--time').innerHTML = `${time.getHours()}:${time.getMinutes()}`;
    document.querySelector('.meteo--date').innerHTML = `${time.getDay()}.${time.getMonth()}.${time.getFullYear()}`;
    setTimeout(timeOut, 3600);
};
timeOut();
