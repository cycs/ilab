
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
const toggleTag = document.querySelector(".site__header a.toggle-nav");
const mainTag = document.querySelector(".site__header nav");
const menuTag = document.querySelector(".site__header nav ul a");

toggleTag.addEventListener("click", function() {
    mainTag.classList.toggle("open");
    let open = mainTag.classList.contains('open') ? true : false;
    function hide(){
        let displayNav = open ? 'flex' : 'none';
        mainTag.style.display = displayNav;
    }
    setTimeout(hide, 150);

    if (mainTag.classList.contains("open")) {
        toggleTag.innerHTML = `<img src="svg/close.svg">`;
    } else {
        toggleTag.innerHTML = `<img src="svg/menu.svg">`;
    }
});

menuTag.addEventListener("click", function() {
    mainTag.classList.toggle("close");
});