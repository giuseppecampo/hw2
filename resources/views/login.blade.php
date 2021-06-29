
<html>
    <head>
    <link rel="stylesheet" href="../resources/css/mhw2.css"/>
    <script src='../resources/js/registrazione.js' defer></script>
    </head>
    <body>
    <?php
            if(isset($errore))
            {
                echo "<p class='errore'>";
                echo "Credenziali non valide.";
                echo "</p>";
            }
        ?>

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
      <h2>  <p>Effettua il login</p>
          
       
    </header>
        <main> <section>
        <div class="container1">
            <form name='user_form' method='post'>
            <input type='hidden' name='_token' value='{{$csrf_token}}'></input>
                <p>
                    <label>Username <input type='text' name='username'></label>
                </p>
                <p>
                    <label>Password <input type='password' name='password' id="password"></label>
                </p>
                <button id="buttons" class="hidden"> Login </button>
                   <!-- <label>&nbsp;<input type='buttons'></label>-->
                    <a href="registrazione"> Effettua la registrazione</a>
            </form>
        </div>
        </section>
        </main>
        <footer>
        <p>TravelSecurity</p>
        <em>Created by Giuseppe Campo, O46002154</em>
    </footer>
</body>
</html>
