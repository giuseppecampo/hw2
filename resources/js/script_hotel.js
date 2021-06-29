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
  }  fetch("FetchHotel").then(onResponse).then(onJSON);


  
  function createTitle(testo){
    const h1 = document.createElement("h1");
    h1.innerText = testo;
    return h1;
}
function createImg(src, width, height){
    const img = document.createElement("img");
   img.setAttribute("src",src);
   img.setAttribute("width",width="250");
   img.setAttribute("height",height="250");
    return img;
}
const bottone = document.getElementById("buttons");
