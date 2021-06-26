<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messaggio extends Model
{
        protected $table = 'messaggi';
        public $timestamps = false;

        protected $fillable = [
            'name', 'surname', 'email', 'mex', 'tempo'
        ];
}

?>