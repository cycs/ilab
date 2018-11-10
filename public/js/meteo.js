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

var average_rain = [
    76.1,
    63.1,
    70,
    51.3,
    66.5,
    71.8,
    73.5,
    79.3,
    68.9,
    74.5,
    76.4,
    81,
];

var forecastFetch = fetch(forecastMeteo).then(blob => blob.json()).then(data => {
    let list = data.list;
    console.log(data);
    let rain = Math.round(list.reduce((a,b) => {
        return b.rain && b.rain['3h'] ? a + b.rain['3h'] : a + 0;
    }, 0));

    let howDry = drought(rain);
    document.querySelector('.meteo--alert').innerHTML = howDry;

    //console.log(`Il y a eu ${rain} millimètres de précipitations sur les 5 derniers jours.`);
});

function drought(rain){
    let time = new Date();
    let month = time.getMonth();
    let diff = parseFloat(((rain*6/average_rain[month])).toFixed(2));
    let result;

    if(diff < 0.2) {
        result = 'Extrêmement sec'
    } else if(diff < 0.5) {
        result = 'Très sec'
    } else if(diff < 0.8) {
        result = 'Modérément sec'
    } else if(diff < 1.2 ) {
        result = 'Proche de la normale'
    } else if(diff < 1.5) {
        result = 'Modérément humide'
    } else if(diff < 1.8) {
        result = 'Très humide'
    } else {
        result = 'Extrêmement humide'
    }
    return result;
}

function timeOut(){
    var month;
    var time = new Date();

    document.querySelector('.meteo--time').innerHTML = `${time.getHours()}:${time.getMinutes() < 10 ? '0'+(time.getMinutes()) : time.getMinutes()}`;
    document.querySelector('.meteo--date').innerHTML = `${time.getDate()}.${time.getMonth()}.${time.getFullYear()}`;
    setTimeout(timeOut, 3600);
};
timeOut();
