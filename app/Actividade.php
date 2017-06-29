<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividade extends Model
{
    protected $fillable = ['designacao','prioridade','estado', 'peso'];

    public function supervisao()
    {
      return $this->belongsTo('App\Supervisao');
    }
}
