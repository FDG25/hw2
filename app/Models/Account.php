<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'account';
    public $timestamps = false;

    /*NON è strettamente necessario perché possiamo comunque accedere ai campi senza specificarli dentro fillable*/
    protected $fillable = [
        'email', 'name', 'surname', 'password', 'telephone', 'checkbox_email'
    ];

    public function reparto() {
        return $this->belongsToMany("App\Models\Reparto", 'preferiti', 'id_utente', 'id_reparto');
    }
}

?>

