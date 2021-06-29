
<html>
<head>

<link rel="stylesheet" href="../resources/css/mhw2.css"/>

<script src='../resources/js/registrazione.js' defer></script>

<script src='../resources/js/check_password.js' defer></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
    <body>
        <main>
            <body>
            <header>      
        <nav>
            <div id="logo">TravelSecurity</div>
            <div id="menu">
                <div></div>
                <div></div>
                <div></div>                
                <div></div>
              </div>
        </nav>
      <h2>  <p>Esegui la registrazione</p>
          
       
    </header>
    <section>
    <div class="container1">
         <h1>Inserire Username e Password </h1>     
        <form action= "registrazione" method="post">
                    <input type='hidden' name='_token' value='{{$csrf_token}}'></input> 
                    <p>
                  Username <input type='text' name='username' id="username" >
                  <p>  Nome <input type='text' name='nome' id="nome" >
                  <p> Cognome <input type='text' name='cognome' id="cognome" >
                  <p> Email <input type='text' name='email' id="email" >
                </p>
                <p>
                Password <input type='password' name='password' id="password" onkeyup="validator()"  autocomplete="off">
                
                <p id="alert"></p></p>
              
             &nbsp; <button id="buttons" class="hidden"> Registrati </button>
                    <a href="login"> Effettua il Login</a></form>
                    
   
        </div>
</section>
                <footer>
        <p>TravelSecurity</p>
        <em>Created by Giuseppe Campo, O46002154</em>
    </footer>
</body>
        </main>
    </body>
</html>