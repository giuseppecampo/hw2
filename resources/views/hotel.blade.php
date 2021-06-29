<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">    
            <link rel="stylesheet" href="../resources/css/mhw2.css"/>
        <script src="../resources/js/script_hotel.js" defer></script>
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
                <a href="gestione_prenotazione"class="button">Gestisci la tua prenotazione </a>
                <a class="button">Newsletter </a>
            </div>
            <div id="menu">
                <div></div>
                <div></div>
                <div></div>                
                <div></div>
              </div>
        </nav>
        <h2><p>Hotel last minute!</p></h2>
       
    </header>
  <section>

  <div class="container">
            <div id="box">
        
           </div>
              </section>
              <section>
                  <div>
                  <h1> Prenota il tuo hotel</h1>
                  
                <form action= "albergo" method="post">
                    <input type='hidden' name='_token' value='{{$csrf_token}}'></input> 
                    Nome Hotel <input type='text' name='servizio' id="servizio">    <br>    
              Giorno di Partenza  <input type="date" name='part_airport' id="part_airport" value="aaaa-mm-dd" min="2021-07-01" max="2022-12-31" required> <span class="validity"></span> <br>   
                Giorno di Ritorno <input type="date" name='dest_airport' id="dest_airport" value="aaaa-mm-dd" min="2021-07-01" max="2022-12-31" required> <span class="validity"></span> <br> 

            &nbsp;<input type='submit' id="buttons"></form>
            
                  </div>
                  <p>{{$error}}</p>
</section>

    <footer>
        <p>TravelSecurity</p>
        <em>Created by Giuseppe Campo, O46002154</em>
    </footer>
    </body>
 </html>    