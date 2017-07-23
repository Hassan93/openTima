<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposta_tema extends Model
{
protected $table = 'proposta_temas';
protected $filable =['designacao','descricao'];

  public function area()
  {
    return $this->belongsTo('App\Area');
  }

  public function docente_proponente()
  {
    return $this->belongsTo('App\Docente','docente_id');
  }

  public function candidatos()
{
 return $this->belongsToMany('App\Candidato_tema', 'candidatos_temas','candidato_id','proposta_tema_id');
}
}
