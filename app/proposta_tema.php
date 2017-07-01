<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proposta_tema extends Model
{
  public function area()
  {
    return $this->belongsTo('App\Area');
  }

  public function docente_proponente()
  {
    return $this->belongsTo('App\Docente');
  }
}
