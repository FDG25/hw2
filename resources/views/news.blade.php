<html>

  <head>
    <meta charset="utf-8">
    <title>News | Azienda Ospedaliera di Giarre</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap|https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href= "../public/css/mhw3.css">
    <script src="{{ asset('js/contents.js') }}" defer="true"></script> 
    <script src="{{ asset('js/scriptnews.js') }}" defer="true"></script> 
  </head>

  <body id = "news">
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
            <a class="effetto" href="login">Accedi / Iscriviti</a>
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
          <strong>Ultime notizie</strong></h1>
        </h1>
        
        <div id="overlay"></div>
    </header>


    <section id="novita">
      <div class="titolo">
        <h1>Novità in ambito sanitario</h1>
      </div>
      <div class="container">
        <div class="containerinterno">
            
        </div>
      </div>
    </section>  

    <!--<section id="covidupdate">
        <div class="titolo">
          <h1>Dati del giorno - Coronavirus Sicilia</h1>
        </div>

        <div class="statistiche">
        </div>
    </section>  -->

    <section id="coviditaliaupdate">
      <div class="titolo">
        <h1>Dati del giorno - Coronavirus Italia</h1>
      </div>

      <div class="statistiche">
      </div>
    </section>

    <section id="vacciniupdate">
      <div class="titolo">
        <h1>Dati vaccinazione Anti Covid-19 Sicilia</h1>
      </div>

      <div class= "statistiche">
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