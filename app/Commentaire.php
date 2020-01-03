<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Etudiant;
use App\Communique;

class Commentaire extends Model
{
    protected $guarded = [];

    public function etudiant()
    {
        return $this->belongsTo('App\Etudiant');
    }

    public function communique()
    {
        return $this->belongsTo('App\Communique');
    }
}
