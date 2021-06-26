<html>

  <head>
    <meta charset="utf-8">
    <title>Servizi | Azienda Ospedaliera di Giarre</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap|https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href= "../public/css/mhw3.css"> 
    <script src="{{ asset('js/servizi.js') }}" defer="true"></script>
  </head>

  <body id = "servizi">
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
          <strong>Servizi al paziente</strong></h1>
        </h1>
        
        <div id="overlay"></div>
    </header>


    <section id="trovadottore">
      <div>
        <h2>Trova un dottore</h2>
      </div>
      <form name ='search_content' id='search_content'>
			<input name="_token" type="hidden" value= "{{ $csrf_token }}"/>
      <div class="surname">
			<label>Cognome: <input type='text' name = 'surname' id ='content'></label>
      <span></span>	
      </div>  
      <div class="name">
      <label>Nome: <input type='text' name = 'name' id ='content'></label>
      <span></span>
      </div> 
				
			<select name ="tipo" id='tipo'>
				<option value='Tutti i reparti'>Tutti i reparti</option>
				<option value='cardiologia'>Cardiologia</option>
				<option value='geriatria'>Geriatria</option>
				<option value='nefrologia'>Nefrologia</option>
				<option value='neurologia'>Neurologia</option>
				<option value='ortopedia'>Ortopedia</option>
				<option value='pediatria'>Pediatria</option>
				<option value='radiologia'>Radiologia</option>
				<option value='virologia'>Virologia</option>
			</select>
			
			<label><input class="casella_invia" type="submit" name="submit" value="Cerca"></label>	
		  </form>

    <div class = "numdottori"></div>
    
    <div class="cont1">
      <ul class="lista">
      </ul>
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