// plantation

var plantEl = document.querySelectorAll('.plantation__el');

for(var i = 0; i < plantEl.length; i++) {
    plantEl[i].addEventListener('click', function(e){
        console.log(this);
        this.classList.toggle('active');
    });
}