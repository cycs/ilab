
console.log('coucou billy, c\'est ici que tu codes');
console.log('PAS TOUCHE MANON');
console.log('ton site.js doit être chargé sur tes pages, n\'noublie pas de rajouter un @yield() avec ton script s\'il n\'exite pas');



// ScrollTo - animation
$(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un Ã©lÃ©ment
        var page = $(this).attr('href'); // Page cible
        var speed = 900; // DurÃ©e de l'animation (en ms)
        $('html, body').animate({ scrollTop: $(page).offset().top }, speed); // Go
        return false;
    });
});


//MENU Hamburger
const toggleTag = document.querySelector("a.toggle-nav");
const mainTag = document.querySelector("nav");
const menuTag = document.querySelector("nav ul a");

//when i click the toggle tag, toggle a class of open on the main tag
// and if it's open, make the toggle tag say closed
// and not, make the toggle tag say open
toggleTag.addEventListener("click", function() {
    mainTag.classList.toggle("open");

    if (mainTag.classList.contains("open")) {
        toggleTag.innerHTML = `<img src="svg/close.svg">`
    } else {
        toggleTag.innerHTML = `<img src="svg/menu.svg">`
    }
});

menuTag.addEventListener("click", function() {
    mainTag.classList.toggle("close")
});