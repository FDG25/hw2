<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reparto extends Model
{
        protected $table = 'reparto';
        protected $primaryKey = "codice";
        protected $autoincrement = false;
        protected $keyType = "string";
        public $timestamps = false;

        /*
        protected $fillable = [
            'codice', 'nomereparto', 'n_medici', 'n_postiletto', 'CF_medico_direttore'
        ]; 
        */

        //Definiamo la relazione con la tabella Medico
        public function medico() {
            return $this->hasMany("App\Models\Medico");
        }

        public function account() {
            return $this->belongsToMany("App\Models\Account", 'preferiti', 'id_reparto', 'id_utente');
        }
}

?>