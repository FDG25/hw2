<html>
  <head>
    <meta charset="utf-8">
    <title>Profilo | Azienda Ospedaliera di Giarre</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap|https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href= "../public/css/mhw3.css">
    <script src="{{ asset('js/profilo.js') }}" defer="true"></script>  
  </head>

    <body id="profiloutente">
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
          <strong>Il tuo profilo</strong></h1>
        </h1>
        
        <div id="overlay"></div>
    </header>
        
    <section id="profilo">
        <div class="profile">
      <img src='../public/images/profilo.png' />
      <span class="utente">{{ $name }}</span>
      <span class="indirizzo">Email: {{ $email }}</span>
    </div>
    </section>

    <section id = "preferiti">
      <div class="titolo">
        <h1>Preferiti</h1>
      </div>
      <p class="hidden">Nessun reparto aggiunto tra i preferiti</p>
      <div class = "hidden wrapper"> 
      <div class="details"> 
        <div data-index="cardiologia" data-id="1">
          <img class="stella" src="../public/images/stellameno.png"/>
          <a>
            <img src="../public/images/cardiologia.jpg" />
            <h1>Cardiologia</h1>
          </a>
        </div>
        <div data-index="geriatria" data-id="2">
            <img class="stella" src="../public/images/stellameno.png"/>
          <a>
            <img src="../public/images/geriatria.jpg" />
            <h1>Geriatria</h1>
          </a>
        </div>
        <div data-index="nefrologia" data-id="3">
            <img class="stella" src="../public/images/stellameno.png"/>
          <a>
            <img src="../public/images/nefrologia.jpg" />
            <h1>Nefrologia</h1>
          </a>
        </div>
        <div data-index="neurologia" data-id="6">
            <img class="stella" src="../public/images/stellameno.png"/>
          <a>
            <img src="../public/images/neurologia.jpg" />
            <h1>Neurologia</h1>
          </a>
        </div>
      </div>
      
        
      <div class="details">  
        <div data-index="ortopedia" data-id="4">
          <img class="stella" src="../public/images/stellameno.png"/>
          <a>
            <img src="../public/images/ortopedia.jpg" />
            <h1>Ortopedia</h1>
          </a>
        </div>
        <div data-index="pediatria" data-id="5">
        <img class="stella" src="../public/images/stellameno.png"/>
        <a>
          <img src="../public/images/pediatria.jpg" />
          <h1>Pediatria</h1>
        </a>
        </div>
        <div data-index="radiologia" data-id="7">
            <img class="stella" src="../public/images/stellameno.png"/>
          <a>
            <img src="../public/images/radiologia.png" />
            <h1>Radiologia</h1>
          </a>
        </div>
        <div data-index="virologia" data-id="8">
        <img class="stella" src="../public/images/stellameno.png"/>
        <a>
          <img src="../public/images/virologia.jpg" />
          <h1>Virologia</h1>
        </a>
        </div>
      </div>
      </div>
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