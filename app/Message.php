<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Administrateur;
use App\Etudiant;

class Message extends Model
{
    protected $guarded = [];

    public function administrateur()
    {
        return $this->belongsTo('App\Administrateur');
    }

    public function etudiant()
    {
        return $this->belongsTo('App\Etudiant');
    }
}
