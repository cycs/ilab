// plantation

var plantEl = document.querySelectorAll('.graine__el');

function changeDataKey(){
    let key = this.dataset.id;
    document.querySelector('.seedId').value = key;
}

for(var i = 0; i < plantEl.length; i++) {
    plantEl[i].addEventListener('click', function(e){
        plantEl.forEach(pl => pl.classList.remove('active'));
        this.classList.add('active');
        changeDataKey.call(this);
    });
}

const filterInput = document.querySelector('.search--input');

filterInput.addEventListener('input', function(e){
    let value = (filterInput.value).toLowerCase();

    let url = '../api/seeds/'+value;

    fetch(url).then(response => response.json()).then(display);

});

function display(res){
    const ul = document.querySelector('.graine__list');
    let value = (filterInput.value).toLowerCase();
    let seeds = [];
    res.forEach(el => {
        if(el.name.includes(value)){
            let lis = document.createElement('li');
            lis.className = 'graine__el';
            lis.setAttribute('data-id', el.id);

            let h2 = document.createElement('h2');
            h2.className = "title title--center";
            let h2Content = document.createTextNode(el.name);
            h2.appendChild(h2Content);

            let img = document.createElement('img');
            img.className = 'graine__img';
            img.src = '../img/'+el.grown_img_url;
            img.alt = 'légume-edenia';

            let p = document.createElement('p');
            p.className = 'text text--italic';
            let pContent = document.createTextNode(el.variety);
            p.appendChild(pContent);

            let d = document.createElement('p');
            d.className = 'text';
            let dContent = document.createTextNode(el.difficulty);
            d.appendChild(dContent);

            let a = document.createElement('a');
            a.className = 'btn__tuto btn__tuto--center';
            a.href = '../app/info/seed/'+el.id;
            let aContent = document.createTextNode('En savoir +');
            a.appendChild(aContent);


            lis.appendChild(h2);
            lis.appendChild(img);
            lis.appendChild(p);
            lis.appendChild(d);
            lis.appendChild(a);
            lis.addEventListener('click', changeDataKey);
            console.log(lis);

            seeds.push(lis);

            console.log(el.name);
        }
    });

    ul.innerHTML = '';
    for(let i = 0; i<seeds.length; i++){
        ul.appendChild(seeds[i]);
    }



}


