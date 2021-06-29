function validator() {
    var x = 0;
    var password = document.getElementById('password').value;
    var al = document.getElementById("alert");
  
    //controllo numeri
    var check=/[0-9]/;
    if(check.test(password)){
      x = x + 20;
    }
    //controllo minuscole
    var check2=/[a-z]/;
    if(check2.test(password)){
      x = x + 20;
    }
    //controllo maiuscole
    var check3=/[A-Z]/;
    if(check3.test(password)){
      x = x + 20;
    }
    //controllo simboli
    var check4=/[$-/:-?{-~!"^_`\[\]]/;
    if(check4.test(password)){
      x = x + 20;
    }
    // controllo lunghezza (minore o uguale a 10 caratteri)
    if(password.length >=10){
      x = x + 20;
    }
  
    // risultato
    // voto massimo 100
    if (x == 100) {
      al.innerHTML = "Password molto buona";
    }
    if (x >60) {
      al.innerHTML = "Password buona";
    }
    if (x <=40) {
      al.innerHTML = "Password accettabile";
    }
    //voto minimo 20
    if (x <=20) {
//bar.style.backgroundColor = "red";
      al.innerHTML = "Password scadente";
    }
  
    if(password.length == 0){
      x == 0;
      al.innerHTML = "";
    }
  
    //controllo spazi bianchi
    var check5=/\s\S/;
    if(check5.test(password)){
      al.innerHTML = "La password non deve contenere spazi";
    }
  }
 