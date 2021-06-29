  fetch("PrenotazioneController").then(onResponse).then(onJSON);
  function onJSON(json){
    console.log(json);
      const b =document.getElementById("box");
      b.innerHTML = '';
      var i=0;
      for (evento of json){
     
      const a=document.createElement("div");
      const servizio= createTitle("Servizio:"+evento.Servizio);
           const destination= createTitle("Partenza:"+evento.Part_airport);
            const departure= createTitle("Arrivo:"+evento.Dest_airport);

      a.appendChild(servizio);
        a.appendChild(destination);
        a.appendChild(departure);
    
      b.appendChild(a);   i++;
    }
  }
    function onResponse(response){
      return  response.json();
    }
    function createTitle(testo){
      const h2 = document.createElement("p");
      h2.innerText = testo;
      return h2;
  }
  
 
 
  function aggiorna(){
    const b= document.getElementById("box");
    b.classList.add("hidden");
  }