// plantation

var plantEl = document.querySelectorAll('.plantation__el');

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
    const ul = document.querySelector('.plantation__list');
    let value = (filterInput.value).toLowerCase();
    let seeds = [];
    res.forEach(el => {
        if(el.name.includes(value)){
            let lis = document.createElement('li');
            lis.className = 'plantation__el';
            lis.setAttribute('data-id', el.id);

            let h2 = document.createElement('h2');
            h2.className = "title title--center";
            let h2Content = document.createTextNode(el.name);
            h2.appendChild(h2Content);

            let img = document.createElement('img');
            img.className = 'plantation__img';
            img.src = '../img/'+el.grown_img_url;
            img.alt = 'légume-edenia';

            let p = document.createElement('p');
            p.className = 'text text--italic';
            let pContent = document.createTextNode(el.variety);
            p.appendChild(pContent);

            let d = document.createElement('div');
            d.className = 'difficult';
            let newP = document.createElement('p');
            newP.className = 'text difficult__txt';
            let newPContent = document.createTextNode('Difficulté');
            newP.appendChild(newPContent);

            let newImg = document.createElement('img');
            newImg.className = 'difficult__img';
            newImg.src = '../img/icon/difficulte.png';
            newImg.alt = 'icone de difficulte';
            d.appendChild(newP);
            d.appendChild(newImg);
            let newImgClone = newImg.cloneNode(true);
            d.appendChild(newImgClone);

          //  let dContent = document.createTextNode(el.difficulty);
           // d.appendChild(dContent);

            lis.appendChild(h2);
            lis.appendChild(img);
            lis.appendChild(p);
            lis.appendChild(d);
            lis.addEventListener('click', changeDataKey);

            seeds.push(lis);

        }
    });

    ul.innerHTML = '';
    for(let i = 0; i<seeds.length; i++){
        ul.appendChild(seeds[i]);
    }



}


