const search = document.getElementById("password");

function check(){
   

search.addEventListener("keyup",event => {
 
   
    var x = document.getElementById("buttons");
    var filtro = search.value.toUpperCase();
    if(filtro == ""){
        x.classList.add("hidden");
       // b.classList.remove("hidden")
      }
      
      else if(filtro.toUpperCase().indexOf(filtro) >-1){
          //  b.classList.add("hidden")
        x.classList.remove("hidden");
      } 
      
});
}


check();