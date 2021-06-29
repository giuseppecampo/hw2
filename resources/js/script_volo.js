function onJSON(json){
    const b =document.getElementById("box");
    var i=0;
    for (evento of json){
      i++;
    const a=document.createElement("div");
    const title= createTitle(evento.Nome);
   const image= createImg(evento.Immagine);
  
    a.appendChild(title);
    a.appendChild(image);
    b.appendChild(a);
  }}
  function onResponse(response){
    return response.json();
  }
  fetch("FetchVolo").then(onResponse).then(onJSON);

  function check(event){   
    const servizio= document.getElementById("servizio").value;
    const part_airport= document.getElementById("part_airport").value;
    const dest_airport= document.getElementById("dest_airport").value;
    const formdata = new FormData();
    formdata.append("servizio", servizio);
    formdata.append("part_airport", part_airport);
    formdata.append("dest_airport", dest_airport);
    fetch("volo",{
        headers: {
              'X-CSRF-TOKEN': document.getElementsByTagName('meta')[0].getAttribute('content')
          },
            method: "post",
          
            body: formdata}
            ).then(function(response) {
                if (response.status >= 200 && response.status < 300) {
                   return response.text()
                }
                throw new Error(response.statusText)
            })
            .then(function(response) {
                var jsonResponse = JSON.parse(response);
                console.log(jsonResponse);
                if(jsonResponse.result=="notOK"){
                    
                }
            })
    
}
  function createTitle(testo){
    const h1 = document.createElement("h1");
    h1.innerText = testo;
    return h1;
}
function createImg(src, width, height){
    const img = document.createElement("img");
   img.setAttribute("src",src);
   img.setAttribute("width",width="400");
   img.setAttribute("height",height="400");
    return img;
}
const bottone = document.getElementById("buttons");
bottone.addEventListener("click", check);