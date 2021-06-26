<html>

  <head>
    <meta charset="utf-8">
    <title>Home Page | Azienda Ospedaliera di Giarre</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap|https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href= "../public/css/mhw3.css">
    <script src="{{ asset('js/script.js') }}" defer="true"></script>  
    <script type="text/javascript">
            const CSFR_TOKEN = '{{ csrf_token() }}';
        </script>
  </head>

  <body>
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
          <strong>Azienda Ospedaliera</strong></h1>
        </h1>
          <div id="logo">
              <img src="../public/images/croce.png">
              <h2>Giarre</h2>
          </div>
        
        <div id="overlay"></div>
    </header>

    <div class="barracolorata"></div> 

    <!--<section id = "preferiti" class = "hidden">
      <div class="titolo">
        <h1>Preferiti</h1>
      </div>

      <div class="details"> 
        <div data-index="cardiologia" data-id="1">
          <img class="stella" src="stellameno.png"/>
          <a>
            <img src="cardiologia.jpg" />
            <h1>Cardiologia</h1>
          </a>
        </div>
        <div data-index="geriatria" data-id="2">
            <img class="stella" src="stellameno.png"/>
          <a>
            <img src="geriatria.jpg" />
            <h1>Geriatria</h1>
          </a>
        </div>
        <div data-index="nefrologia" data-id="3">
            <img class="stella" src="stellameno.png"/>
          <a>
            <img src="nefrologia.jpg" />
            <h1>Nefrologia</h1>
          </a>
        </div>
        <div data-index="neurologia" data-id="6">
            <img class="stella" src="stellameno.png"/>
          <a>
            <img src="neurologia.jpg" />
            <h1>Neurologia</h1>
          </a>
        </div>
      </div>
      
        
      <div class="details">  
        <div data-index="ortopedia" data-id="4">
          <img class="stella" src="stellameno.png"/>
          <a>
            <img src="ortopedia.jpg" />
            <h1>Ortopedia</h1>
          </a>
        </div>
        <div data-index="pediatria" data-id="5">
        <img class="stella" src="stellameno.png"/>
        <a>
          <img src="pediatria.jpg" />
          <h1>Pediatria</h1>
        </a>
        </div>
        <div data-index="radiologia" data-id="7">
            <img class="stella" src="stellameno.png"/>
          <a>
            <img src="radiologia.png" />
            <h1>Radiologia</h1>
          </a>
        </div>
        <div data-index="virologia" data-id="8">
        <img class="stella" src="stellameno.png"/>
        <a>
          <img src="virologia.jpg" />
          <h1>Virologia</h1>
        </a>
        </div>
      </div>
  </section> -->

  
    <section id="principale">  
      <div class="titolo"></div>  
      <div class="details"></div>
      <div class = "arrow"></div>       
      <div class="altrireparti hidden">  
        <div class="details"></div>
        <div class = "arrow"></div>
      </div>  
    </section>

    <section id="comeraggiungerci">
        <div class="titolo">
          <h1>Come raggiungerci</h1>
        </div>

        <div id="googlemaps"> 
            <a href="https://www.google.it/maps/place/Presidio+Ospedaliero+%22San+Giovanni+di+Dio+e+Sant'Isidoro%22/@37.7243529,15.1675882,17z/data=!3m1!4b1!4m5!3m4!1s0x1314065893a7b02d:0x596dccfd3ff1deab!8m2!3d37.7243529!4d15.1697769">
              <img src="../public/images/googlemaps.png"/>
            </a>
        </div>
    </section>

    <div class="barracolorata"></div>  

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