<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
        protected $table = 'medico';
        protected $primaryKey = "CF";
        protected $autoincrement = false;
        protected $keyType = "string";
        public $timestamps = false;

        protected $fillable = [
            'CF', 'cognome', 'nome', 'eta', 'genere', 'chirurgo', 'codice_reparto', 'foto'
        ];

        public function reparto() {
            return $this->belongsTo("App\Models\Reparto");
        }
}

?>