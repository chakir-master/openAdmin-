<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Message;
use App\Commentaire;

class Etudiant extends Model
{
    protected $guarded = [];

    public function message()
    {
        return $this->hasMany('App\Message');
    }

    public function commentaire()
    {
        return $this->hasMany('App\Commentaire');
    }
}
