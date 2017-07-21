<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duvida extends Model
{
    public function categorias()
    {
      return $this->belongsToMany('App\Categoria', 'categorias_duvidas', 'categoria_id', 'duvida_id');
    }
    public function estudante()
    {
      return $this->belongsTo('App\Estudante', 'estudante_id');

    }
}
