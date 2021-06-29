function onJSON(json){
    const b =document.getElementById("box");
    var i=0;
    for (evento of json){
      i++;
    const a=document.createElement("div");
    const title= createTitle(evento.Nome);
   const image= createImg(evento.Immagine);
   const paragrafo=createParagraph(evento.Caratteristiche);
    a.appendChild(title);
    a.appendChild(image);
    a.appendChild(paragrafo);
    b.appendChild(a);
  }}
  function onResponse(response){
    return response.json();
  }
  fetch("FetchNoleggio").then(onResponse).then(onJSON);

function aggiorna(){
  const b= document.getElementById("box");
  b.classList.add("hidden");
}
  function createTitle(testo){
    const h1 = document.createElement("h1");
    h1.innerText = testo;
    return h1;
}
function createImg(src, width, height){
    const img = document.createElement("img");
   img.setAttribute("src",src);
   img.setAttribute("width",width="350");
   img.setAttribute("height",height="250");
    return img;
}
function createParagraph(testo){
    const p = document.createElement("p");
    p.innerText = testo;
    return p;
}
const bottone = document.getElementById("buttons");
bottone.addEventListener("click", check);
function onJSON1(json){
  const b =document.getElementById("box");  
  const a=document.createElement("div");
  const title= createTitle(json.error);
  a.appendChild(title);
  b.appendChild(a);}
function onResponse(response){
  return response.json();
}
fetch("FetchInserimento").then(onResponse).then(onJSON1);
