<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato_tema extends Model
{
    public function estudante($value='')
    {
      return $this->hasOne('App\Estudante');
    }

    public function proposta_temas()
  {
   return $this->belongsToMany('App\proposta_tema', 'tema_canditados','proposta_tema_id','candidato_id');
  }
}
