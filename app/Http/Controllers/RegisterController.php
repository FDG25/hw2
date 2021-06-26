<?php

use Illuminate\Routing\Controller as BaseController;  //Base controller è la classe base di tutti i controller
use App\Models\Account;   //ci serve per poter fare la query

class RegisterController extends BaseController
{

    public function signup(){  //andiamo a ritornare la view che contiene il form di registrazione
        if(session('_ospedale_user_id') != null) {
            return redirect("home");
        }
        else {
            $old_name = Request::old('name');
            $old_surname = Request::old('surname');
            $old_email = Request::old('email');
            return view("signup")->with("old_name", $old_name)
                                 ->with("old_surname", $old_surname)
                                 ->with("old_email", $old_email)
                                 ->with('csrf_token', csrf_token()); ;                  
        }
    } 


    public function checkEmail($input){
        $exist = Account::where('email', $input)->exists(); //controlliamo se l'email che ci viene passata ($input) si trova nel database 
        return ['exists' => $exist];  //ritorniamo come facevamo in php un array (che poi verrà convertito in json) che ha il solo camp exists, booleano
    }
    

    public function create() {
        $request = request();   //leggiamo tutti i campi inseriti nel form che ci vengono passati
        
        if (isset($request->telephone_number)){
            $telephone = $request->telephone_number;
        }
        else{
            $telephone = 0;
        }

        if (isset($request->email_checkbox)){
            $checkbox = 1;
        }
        else{
            $checkbox = 0;
        }

        $return = Account::create([
            'email' => $request->email, 
            'name' => $request->name, 
            'surname' => $request->surname, 
            'password' => Hash::make($request->password), 
            'telephone' => $telephone, 
            'checkbox_email' => $checkbox
        ]);  //ritorniamo un booleano --> true se è andata a buon fine la creazione

        if($return == true){
            return redirect("login")->with('csrf_token', csrf_token());
        }
        else{
            return redirect("signup")->withInput()
                                     ->with('csrf_token', csrf_token())
                                     ->with('errore','Errore di connessione al Database');
        }
    }

 }
?>