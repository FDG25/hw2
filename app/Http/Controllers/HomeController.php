<?php

use Illuminate\Routing\Controller as BaseController;  //Base controller è la classe base di tutti i controller
use App\Models\Account;   //ci serve per poter fare la query

class HomeController extends BaseController
{

  public function home(){  //andiamo a ritornare la view che contiene il form di registrazione
    return view('mhw3'); 
  }

  public function contattaci(){  //andiamo a ritornare la view che contiene il form di registrazione
    return view('contattaci')->with('csrf_token', csrf_token()); 
  }
  public function news(){  //andiamo a ritornare la view che contiene il form di registrazione
    return view('news'); 
  }
  public function servizi(){  //andiamo a ritornare la view che contiene il form di registrazione
    return view('servizi')->with('csrf_token', csrf_token());  
  }

  public function avviso(){
    return view('avviso');
  }

}

?>