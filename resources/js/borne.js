// BORNE HAMBURGER

var hamb = document.querySelector(".hamb");
var nav = document.querySelector('.nav');

hamb.addEventListener('click', function(e){
    console.info('salut');
    nav.classList.toggle('hide');
});