<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Adminnistrateur;
use App\Commentaire;

class Communique extends Model
{
    protected $guarded = [];

    public function administrateur()
    {
        return $this->belongsTo('App\Administrateur');
    }

    public function commentaire()
    {
        return $this->hasMany('App\Commentaire');
    }
}
