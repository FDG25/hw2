<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contenuto extends Model
{
        protected $table = 'contenuti';
        protected $primaryKey = "titolo";
        protected $autoincrement = false;
        protected $keyType = "string";
        public $timestamps = false;
}

?>