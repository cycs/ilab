
// BORNE HAMBURGER

var hamb = document.querySelector(".menu");
var hambBar = document.querySelector('#bar1');
var hambBar2 = document.querySelector('#bar2');
var hambBar3 = document.querySelector('#bar3');
var hambBar4 = document.querySelector('#bar4');
var hambBar5 = document.querySelector('#bar5');
var nav = document.querySelector('.nav');


hamb.addEventListener('click', function(e){
    hambBar.classList.toggle('open');
    hambBar2.classList.toggle('open');
    hambBar3.classList.toggle('open');
    hambBar4.classList.toggle('open');
    hambBar5.classList.toggle('open');
    nav.classList.toggle('open');
});


