<html>

  <head>
    <meta charset="utf-8">
    <title>Contattaci | Azienda Ospedaliera di Giarre</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap|https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href= "../public/css/mhw3.css">
    <script src="{{ asset('js/contattaci.js') }}" defer="true"></script>
  </head>

  <body id="contact">
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
          <strong>Contatti e Numeri Utili</strong></h1>
        </h1>
        
        <div id="overlay"></div>
    </header>
        
    <section id="contactus">
        <div class="contenitorecontattaci">
        <img src="../public/images/email.png">
        <h2>Contattaci</h2>
        <p>*Riempire tutti i campi*</p>

          @if (session('errore')){
              "<span class='errorj'>{{ session('errore') }}</span>";
          }           
          @endif

          <form method="post" id="formcontattaci">
            <input name="_token" type="hidden" value= "{{ $csrf_token }}"/>
            <div class="contenutoformcontattaci name">
              <label>Nome<input type="text" name="name" value='{{ old("name") }}'></label>
              <span></span>
            </div>
      
            <div class="contenutoformcontattaci surname">
              <label>Cognome<input type="text" name="surname" value ='{{ old("surname") }}'></label>
              <span></span>
            </div>
      
            <div class="contenutoformcontattaci email">
              <label>Email<input type="text" name="email"></label>
              <span></span>
            </div>
      
            <div class="contenutoformcontattaci message">
              <label>Messaggio<textarea style="resize: none;" name="message" rows="10"></textarea></label>  <!--NON VISTO A LEZIONE -> QUESTO ELEMENTO HTML CREA UNA CASELLA RIDIMENSIONABILE, MA CON style="resize:none;" HO VIETATO QUESTA COSA-->
              <span></span>
            </div>
      
            <div>
            <label><input class="casella_invia" type="submit" value="Invia"></label>
            </div>
          </form>
        </div>
      </section>


      <section class = "informazioni">
      <div class="contenitoreregistrazione">
      <h2>Prenotazioni visite ed esami in Libera Professione</h2>
      </div>
      <div class="contenitorecontatti">
      <div class="contattiinterno">
        <div class="icone">
          <img src="../public/images/telefono.png">
          <h4>Telefono</h4>
          <p>111 1111111</p>
        </div>
      </div>

        <div class="contattiinterno">
          <div class="icone">
            <img src="../public/images/smartphone.png">
            <h4>Cellulare</h4>
            <p>394 9492939</p>
          </div>
        </div>
        
        <div class="contattiinterno">
          <div class="icone">
            <img src="../public/images/chiocciola.png">
            <h4>Email</h4>
            <p>prova1@hotmail.it</p>
          </div>
        </div>
       </div>
       <div class="utili">
       <div class="contenitoreregistrazione">
       <p>Lun – Ven: 9.00-18.00 / Sabato 9.00-12.00</p>
       </div>
       </div>  
      </section>

    <section class = "informazioni">
      <div class="contenitoreregistrazione">
      <h2>Centro Prelievi</h2>
      </div>
      <div class="contenitorecontatti">
        <div class="contattiinterno">
          <div class="icone">
            <img src="../public/images/telefono.png">
            <h4>Telefono</h4>
            <p>222 2222222</p>
          </div>
        </div>

        <div class="contattiinterno">
          <div class="icone">
            <img src="../public/images/posizione.png">
            <h4>Indirizzo</h4>
            <p>Prova2, 455544</p>
          </div>
        </div>
        
        <div class="contattiinterno">
          <div class="icone">
            <img src="../public/images/chiocciola.png">
            <h4>Email</h4>
            <p>prova2@hotmail.it</p>
          </div>
        </div>
       </div>
       <div class="utili">
       <div class="contenitoreregistrazione">
       <p>Lun. - Ven: 8.00 – 12.30</p>
       </div>
       </div>  
      </section>

        <section class = "informazioni">
          <div class="contenitoreregistrazione">
          <h2>Ufficio Cartelle Cliniche</h2>
          </div>
          <div class="contenitorecontatti">
            <div class="contattiinterno">
              <div class="icone">
                <img src="../public/images/telefono.png">
                <h4>Telefono</h4>
                <p>333 3333333</p>
              </div>
            </div>
            
            <div class="contattiinterno">
              <div class="icone">
                <img src="../public/images/posizione.png">
                <h4>Indirizzo</h4>
                <p>Prova3, 212112</p>
              </div>
            </div>
            
            <div class="contattiinterno">
              <div class="icone">
                <img src="../public/images/chiocciola.png">
                <h4>Email</h4>
                <p>prova3@hotmail.it</p>
              </div>
            </div>
           </div>
           <div class="utili">
           <div class="contenitoreregistrazione">
           <p>Lun – Ven: 8.00 – 15.00</p>
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