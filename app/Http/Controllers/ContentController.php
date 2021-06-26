<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller as BaseController;  //Base controller è la classe base di tutti i controller
use App\Models\Contenuto;   //ci serve per poter fare la query
use App\Models\Messaggio;   
use App\Models\Medico;  
use App\Models\Reparto;  
use App\Models\Account;   //ci serve per poter fare la query


class ContentController extends BaseController
{
    public function carica_contenuti(){
        $blocchi = Contenuto::all();

        return $blocchi;
    }

    public function invia_messaggio(){
        $request = request();   //leggiamo tutti i campi inseriti nel form che ci vengono passati

        if(isset($request->name) && isset($request->surname) && isset($request->email) && isset($request->message)) {
        $res = Messaggio::create([
            'name' => $request->name, 
            'surname' => $request->surname, 
            'email' => $request->email, 
            'mex' => $request->message,
            'tempo' => $orario = date("Y-m-d H:i:s")
        ]);  
    }

        if($res){
            return redirect("avviso");
        }
        else{
            return redirect('contattaci')->withInput()
                                         ->with('errore', "Errore nell'invio del messaggio!");
        }
    }

    public function trovaNotizie(){
        $url = 'https://api.currentsapi.services/v1/latest-news?language=it&category=health&apiKey='.env("API_KEY");
        $json = Http::get($url);
        if($json->failed()) abort(500); //500-->errore richiesta http

        $newJson = array();

        for ($i = 0; $i < count($json['news']); $i++) {
            $newJson[] = array('title' => $json['news'][$i]['title'], 
            'description' => $json['news'][$i]['description'], 
            'url' => $json['news'][$i]['url'], 
            'image' => $json['news'][$i]['image'], 
            'published' => $json['news'][$i]['published']);
        }
        return $newJson;  //VIENE CONVERTITO IN AUTOMATICO IN JSON
    }
    

    public function carica_dati_dottori(){
        $dottori = array();
        
        $dottori = Medico::join('reparto', 'medico.codice_reparto', '=', 'reparto.codice')
                           ->select('medico.cf','medico.cognome','medico.nome','medico.chirurgo',
                            'medico.codice_reparto', 'medico.foto', 'reparto.nomereparto', 'reparto.cf_medico_direttore')
                           ->orderBy('cognome')
                           ->get();
                           
        return $dottori;
    }

    public function visualizza_profilo(){
        if(session('_ospedale_user_id') != null) {
            $user = Account::find(session('_ospedale_user_id'));
            return view("profilo")->with("name", $user->name)
                                  ->with("email", $user->email);
            }
        else{
            return redirect("login");
        }
    }

    public function carica_preferiti(){
        $userid = session('_ospedale_user_id'); 
        if($userid != null){
            $query = "SELECT c.titolo as titolo, c.immagine as immagine from contenuti c where c.titolo in (SELECT r.nomereparto from reparto r, preferiti p where r.codice = p.id_reparto AND p.id_utente = $userid)";
            $preferiti = DB::select($query);
        }
        return $preferiti;

        /* 
        ***ORM***
        $preferiti = array();
        if(session('_ospedale_user_id')!=null){
            $preferiti = Contenuti::whereIn('contenuti.titolo', 
                                            Reparto::join('preferiti', 'reparto.codice', '=', 'preferiti.id_reparto')
                                            ->select('reparto.nomereparto','contenuti.immagine')
                                            ->where('preferiti.id_utente', session('_ospedale_user_id')))
                                    ->select('contenuti.titolo','contenuti.immagine')->get();
        }
        return $preferiti;*/ 
    }

    public function aggiungi_Preferiti(){
        $request = request();  //nulla cambia se sostituisco queste 2 istruzioni con: $id_reparto = request("id");
        $id_reparto = $request->id;
        if(session('_ospedale_user_id') != null){
            $user = Account::find(session('_ospedale_user_id'));
            
            try{
                $user->reparto()->attach($id_reparto);
            } catch(\Illuminate\Database\QueryException $exception){
                return $exception->getMessage();
            }
        }
    }

    public function rimuovi_Preferiti(){
        $request = request();
        $id_reparto = $request->id;
        if(session('_ospedale_user_id') != null){
            $user = Account::find(session('_ospedale_user_id'));

            try{
                $user->reparto()->detach($id_reparto);
            } catch(\Illuminate\Database\QueryException $exception){
                return $exception->getMessage();
            }
        }
    }
}

?>