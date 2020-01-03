<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Communique;
use App\Message;

class Administrateur extends Model
{
    protected $guarded = [];

    public function communiques()
    {
        return $this->hasMany('App\Communique');
    }

    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}
