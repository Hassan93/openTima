<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato_tema extends Model
{
    public function proposta_temas()
  {
   return $this->belongsToMany('App\Proposta_tema', 'candidatos_temas','proposta_tema_id','candidato_id');
  }
}
