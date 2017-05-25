<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    public function area_ciientifica()
    {
      return $this->belongsTo('App\Area_Cientifica');
    }
}
