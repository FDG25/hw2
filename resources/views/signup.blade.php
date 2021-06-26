<html>

  <head>
    <meta charset="utf-8">
    <title>Iscriviti | Azienda Ospedaliera di Giarre</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap|https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href= "../public/css/mhw3.css">
    <script src="{{ asset('js/signup.js') }}" defer="true"></script>
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
            <a class="effetto" href="login">Accedi</a>
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
          <strong>Iscriviti</strong></h1>
        </h1>
    </header>

    <section id="registrazione">
        <div class="contenitoretitolo">
              <h2>Registrati</h2>
              <p>Attenzione: i campi contrassegnati da un (*) sono obbligatori</p>
              
              @if (session('errore'))
                <span class='errore'>{{ session('errore') }}</span>
              @endif
        </div>

        <form method='post'>
          
            <div class="contenitoreregistrazione bianco">
            <input name="_token" type="hidden" value= "{{ $csrf_token }}"/>
            <div class="name">
              <label>Nome*<input class="casella" type = 'text' name = 'name' value='{{ old('name') }}'></label>
              <span></span>
            </div>  <!--div messi per allontanare le varie caselle fra loro-->
            <div class="surname">
              <label>Cognome*<input class="casella" type = 'text' name = 'surname' value='{{ old('surname') }}'></label>
              <span></span>
            </div>
            <div class="email">
              <label>Email*<input class="casella" type = 'text' name = 'email' value='{{ old('email') }}'></label>
              <span></span>
            </div>
            <div class="password">
              <label>Password*<input class="casella" type = 'password' name = 'password' ></label>
              <span>La password deve contenere almeno una lettera maiuscola, almeno un numero e deve essere composta da almeno 8 caratteri.</span>
            </div>
            <div class="confirm_password">
              <label>Conferma Password*<input class="casella" type = 'password' name = 'confirm_password'></label>
              <span></span>
            </div>
            <div class="telephone_number">
              <label>Telefono Cellulare<input class="casella" type = 'text' name = 'telephone_number' ?></label>
              <span></span>
            </div>
            
            <div class="flex_checkbox">
            <label><input class="checkbox" type = 'checkbox' name = 'flex_checkbox'> Dichiaro di aver preso visione dell’informativa relativa al trattamento dei dati personali.*</label>
            </div>
            <div class="flex_checkbox">
            <label><input type = 'checkbox' name = 'email_checkbox'> Autorizzo l'invio tramite E-MAIL di news di servizio e aggiornamento sulle attività dell'Azienda Ospedaliera di Giarre.</label>
            </div>
            </div>
            
            <div class="contenitoreregistrazione">
              <label><input class="casella_invio" type="submit" value="Crea account"></label>
              <span></span>
            </div>
          </form> 

          <div class="signup">Hai già un account? <a href="login">Accedi</a></div>
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