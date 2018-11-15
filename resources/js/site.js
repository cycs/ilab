
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
const toggleTag = document.querySelector(".menu");
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

  /*  if (mainTag.classList.contains("open")) {
        toggleTag.innerHTML = `<img src="svg/close.svg">`;
    } else {
        toggleTag.innerHTML = `<img src="svg/menu.svg">`;
    }*/
});

menuTag.addEventListener("click", function() {
    mainTag.classList.toggle("close");
});



$(document).ready(function() {
    // Test for placeholder support
    $.support.placeholder = (function(){
        var i = document.createElement('input');
        return 'placeholder' in i;
    })();

    // Hide labels by default if placeholders are supported
    if($.support.placeholder) {
        $('.form-label').each(function(){
            $(this).addClass('js-hide-label');
        });

        // Code for adding/removing classes here
        $('.form-group').find('input, textarea').on('keyup blur focus', function(e){

            // Cache our selectors
            var $this = $(this),
                $parent = $this.parent().find("label");

            switch(e.type) {
                case 'keyup': {
                    $parent.toggleClass('js-hide-label', $this.val() == '');
                } break;
                case 'blur': {
                    if( $this.val() == '' ) {
                        $parent.addClass('js-hide-label');
                    } else {
                        $parent.removeClass('js-hide-label').addClass('js-unhighlight-label');
                    }
                } break;
                case 'focus': {
                    if( $this.val() !== '' ) {
                        $parent.removeClass('js-unhighlight-label');
                    }
                } break;
                default: break;
            }
        });
    }
});


// Slider site

var sliderEl = document.querySelectorAll('.slider__el');
var sliderPrev = document.querySelector('.slider .prev');
var sliderNext = document.querySelector('.slider .next');
var slideIndex = 0;

sliderPrev.addEventListener('click', function(e){
    slideIndex -= 1;
    if(slideIndex < 0) {
        slideIndex = sliderEl.length -1;
    }
    for(var i=0; i < sliderEl.length; i++) {
        document.querySelector('.slider .slider__el.active').classList.remove('active');
        sliderEl[slideIndex].classList.add('active');
    }
});

sliderNext.addEventListener('click', function(e){
    slideIndex += 1;
    if(slideIndex > sliderEl.length -1) {
        slideIndex = 0;
    }
    document.querySelector('.slider .slider__el.active').classList.remove('active');
    sliderEl[slideIndex].classList.add('active');
});