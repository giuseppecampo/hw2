<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="../resources/css/mhw2.css"/>
      <script src="../resources/js/script_prenotazione.js" defer></script>
          <meta  name='_token' value='{{$csrf_token}}'>
        <title>TravelSecurity</title>
    </head>
    <body>
    <header>      
  
        <nav>
            <div id="logo">TravelSecurity</div>
            <div id="link">
                <a href="home" class="button"> Home</a>
                <a class="button">About us</a>
                <a class="button">Prenota il tuo viaggio</a>
                <a class="button">Gestisci la tua prenotazione </a>
                <a class="button">Newsletter </a>
            </div>
            <div id="menu">
                <div></div>
                <div></div>
                <div></div>                
                <div></div>
              </div>
        </nav>
        <h2><p>Gestisci la tua prenotazione!</p></h2>
       
    </header>
  
              <section>
              
                  <div>
                  <h1> Gestisci la tua prenotazione</h1> </div>
                  <div id="box"></div>
                  <div id="box1">
                  <form action= "DestroyPrenotazioneByName" method="post">
                  <input type='hidden' name='_token' value='{{$csrf_token}}'></input> 
                    Nome del Servizio <input type='text' name='servizio' id="servizio">                 
                    <button id="elimina"> Cancella la tua prenotazione  </button>
                  </div>
           </section>
</section>
    <footer>
        <p>TravelSecurity</p>
        <em>Created by Giuseppe Campo, O46002154</em>
    </footer>
    </body>
 </html>   