<?php

use Illuminate\Routing\Controller as BaseController;  //Base controller è la classe base di tutti i controller
use Illuminate\Support\Facades\Session;
use App\Models\Account;   //ci serve per poter fare la query


class LoginController extends BaseController
{
    public function visualizza_login(){
        if(session('_ospedale_user_id') != null) {
            return redirect("mhw3");
        }
        else {
            $old_email = Request::old('email');
            return view("login")->with("old_email", $old_email)
                                ->with('csrf_token', csrf_token());
        }
    }

    
    public function checkEmail($input){
        $exist = Account::where('email', $input)->exists(); //controlliamo se l'email che ci viene passata ($input) si trova nel database 
        return ['exists' => $exist];  //ritorniamo come facevamo in php un array (che poi verrà convertito in json) che ha il solo camp exists, booleano
    }


    public function checkLogin(){
        $request = request();
        if(isset($request->email) && isset($request->password)){
            $user = Account::where('email', $request->email)->first();  //non serve fare l'hash della password
            if($user != null){
                if (password_verify($request->password, $user->password)){
                    Session::put('_ospedale_user_id', $user->id);
                    return redirect('home');
                }
                else{
                    return redirect('login')->withInput()
                                            ->with('csrf_token', csrf_token())
                                            ->with('errore',"Indirizzo email e/o password errati.");
                }
            }
        }
        else{  //se sono impostati entrambi ma sono errati
            if(isset($user->email) && !isset($user->password) || !isset($user->email) && isset($user->password)) {  // Se solo uno dei due è impostato o se non è impostato nessuno dei due campi
                return redirect('login')->withInput()
                                        ->with('csrf_token', csrf_token())
                                        ->with('errore', "Inserisci indirizzo email e password!");
            }
        }        
    }


    public function logout() {
        Session::flush(); 
        return redirect('login');
    }
}

?>