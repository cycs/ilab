// plantation

var plantEl = document.querySelectorAll('.plantation__el');

for(var i = 0; i < plantEl.length; i++) {
    plantEl[i].addEventListener('click', function(e){
        console.log(this);
        this.classList.toggle('active');
    });
}

const filterInput = document.querySelector('.search--input');

filterInput.addEventListener('input', function(e){
    console.log(filterInput.value);
    let value = (filterInput.value).toLowerCase();

    let url = '../api/seeds/'+value;

    fetch(url).then(response => response.json()).then(display);

});

function display(res){
    const ul = document.querySelector('.plantation__list');
    let value = (filterInput.value).toLowerCase();
    let seeds = [];
    res.forEach(el => {
        if(el.name.includes(value)){
            let li =
                `<li class="plantation__el">
                    <h2 class="title title--center">${el.name}</h2>
                    <img class="plantation__img" src='../img/${el.grown_img_url}' alt="légume-edenia" />
                    <p class="text text--italic">${el.variety}</p>
                    <p class="text">Difficulté</p>
                </li>`;

            seeds.push(li);

            console.log(el.name);
        }
    });

    ul.innerHTML = seeds.join('');
}
