function onMex(promise){
    return promise.text();
}

const lista = [];  //PER TENERE TRACCIA DEI PREFERITI
function onJsonPrefer(json) {
    console.log('JSON ricevuto');
    console.log(json);

    const contenitori = document.querySelectorAll('#preferiti .details div');
    const wrapper = document.querySelector('.wrapper');

    const par = document.querySelector('#preferiti p');     
    if(json.length == 0){
        par.classList.remove("hidden");
    } else{
        par.classList.add("hidden");
    }

    for(oggetto of json){
        lista.push(oggetto.titolo.toUpperCase());  
    }
        
    for (const contenitore of contenitori){
        const title = contenitore.querySelector("h1").textContent;

        if(lista.includes(title.toUpperCase())){ 
            wrapper.classList.remove("hidden");
            contenitore.classList.remove("hidden");
        }
    }

    for (const contenitore of contenitori){
        const title = contenitore.querySelector("h1").textContent;
        
        if(!lista.includes(title.toUpperCase())){
            contenitore.classList.add("hidden"); 
        }  
    }
}

function onResponse(response) {
    /*console.log('Risposta ricevuta');*/
    return response.json();
    }

function aggiornaPreferiti() {
    fetch('ritornaPreferiti/').then(onResponse).then(onJsonPrefer);
}

aggiornaPreferiti();


function togliDaiPreferiti(event){
    const identifier = event.currentTarget.parentNode.dataset.index; 
    const identif = identifier.toUpperCase();

    const contenitori = document.querySelectorAll('#preferiti .details div');
    const contprincipali = document.querySelectorAll('#principale .details div');
 
    for (const contenitore of contenitori){
        const title = contenitore.querySelector("h1").textContent;

        if(title.toUpperCase() === identif){ 
            const indice = lista.indexOf(identif);
            lista.splice(indice, 1);  
            contenitore.classList.add("hidden");

            const id = event.currentTarget.parentNode.dataset.id;
            const idrep = new FormData();
            idrep.append('id', id); // Mando l'ID alla pagina PHP tramite fetch
            fetch("rimuoviPreferiti/",{
                method:'post',
                body: idrep}).then(onMex);
        }
    }
    
    const par = document.querySelector('#preferiti p');    
    if(lista.length == 0){
        par.classList.remove("hidden");
    }
    else{
        par.classList.add("hidden");
    }
}

const stellaminus = document.querySelectorAll('.details .stella');
for(const stella of stellaminus){
    stella.addEventListener('click', togliDaiPreferiti);
}