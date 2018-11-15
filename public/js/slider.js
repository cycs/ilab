// slider borne

var sliderEl = document.querySelectorAll('.slider__el');
var sliderPrev = document.querySelector('#prev');
var sliderNext = document.querySelector('#next');
var slideIndex = 0;

sliderEl[0].classList.add('active');

/*function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    console.log(n);
    if(n > sliderEl.lenght) {
        slideIndex = 1;
    }
    if(n < 1) {
        slideIndex = sliderEl.length;
    }
    for (var i=0; i < sliderEl.length; i++) {
        sliderEl[i].style.display = "none";
    }
    sliderEl[slideIndex-1].style.display = "block";
}*/

sliderPrev.addEventListener('click', function(e){
    slideIndex -= 1;
    if(slideIndex < 0) {
        slideIndex = sliderEl.length -1;
    }
    for(var i=0; i < sliderEl.length; i++) {
        document.querySelector('.slider__el.active').classList.remove('active');
        sliderEl[slideIndex].classList.add('active');
    }
});

sliderNext.addEventListener('click', function(e){
    slideIndex += 1;
    if(slideIndex > sliderEl.length -1) {
        slideIndex = 0;
    }
    for(var i=0; i < sliderEl.length; i++) {
        document.querySelector('.slider__el.active').classList.remove('active');
        sliderEl[slideIndex].classList.add('active');
    }
});