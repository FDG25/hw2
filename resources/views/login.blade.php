<html>
  <head>
    <meta charset="utf-8">
    <title>Accedi | Azienda Ospedaliera di Giarre</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap|https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href= "../public/css/mhw3.css">
    <script src="{{ asset('js/login.js') }}" defer="true"></script>
  </head>

    <body class = "iscrizione">
    <header>
      <nav>  
        <div id="contattaci">
          <a href="contattaci">Contattaci</a>
        </div>

        <div id="links">
          <a class="effetto" href="home">Home</a>  
          <!--<a class="effetto">Chi siamo</a>-->
          <a class="effetto" href="news">News</a>
          <a class="effetto" href="servizi">Servizi</a>
          <!--<a class="effetto">Reparti</a>-->
          <!--<a class="effetto">Dona</a>-->
          @if (session('_ospedale_user_id', 'default') == "default")
            <a class="effetto" href="signup">Iscriviti</a>
          @endif
          @if (session('_ospedale_user_id', 'default') != "default")
            <a class="effetto" href="profilo">Profilo</a>
            <a class="effetto" href="logout">Logout</a>
          @endif
        </div>

        <div id="pulsante">  
        <a>Menu</a>
        </div>

	  	  <div id="menu">   
          <div></div>  
          <div></div>  
          <div></div>
        </div>
      </nav>

        <h1>
          <strong>Accedi</strong></h1>
        </h1>
    </header>
        
    <section id="login">
            <div class="contenitoretitolo">
              <h2>Effettua l'accesso</h2>
              <p>Inserisci indirizzo email e password.</p>
            </div>
        <form method='post'>
          
            <div class="contenitoreregistrazione bianco">
                <input name="_token" type="hidden" value= "{{ $csrf_token }}"/>
                
                <div class="email">
                <label>Email:<input class="casella" type = 'text' name = 'email' value='{{ old("email") }}'></label>
                <span></span>
                </div>
                <div class="password">
                <label>Password:<input class="casella" type = 'password' name = 'password'></label>
                <span></span>
                </div>
                <!--<div class= "remember">
                    <div><label>Ricorda l'accesso<input type='checkbox' name='remember'></label></div>  -->
                    <!-- <label><input class="checkbox" type="checkbox" name="spunta">I'm not a robot</label> -->
                <!--</div> -->

                @if (session('errore'))
                  <span class='errore'>{{ session('errore') }}</span>
                @endif
            </div>
          
            <div class="contenitoreregistrazione">
              <label><input class="casella_invio" type="submit" value="Accedi"></label>
            </div>
          </form> 
          <div class="signup">Non hai un account? <a href="signup">Iscriviti</a></div>
    </section>
    
    <footer>    
            <p id="trovaci">Find us on:</p>
            <div class="icone">
              <a>         
                <img src="../public/images/facebook.png"/>
              </a>
              <a>
                <img src="../public/images/instagram.png"/>
              </a>
              <a>
                <img src="../public/images/youtube.png"/>
              </a>
            </div>
          <address>   
            <a href="mailto:O46002089@studium.unict.it">Freni Davide Giovanni (O46002089).</a> 
          </address>
            <p id= "lineaconclusiva">© Copyright 2021 - Azienda Ospedaliera di Giarre</p>  
        </footer>
    </body>
</html>