<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    public function curso()
    {
    	return $this->belongsTo('App\Curso');
    }
    public function disciplinas()
    {
    	return $this->belongsToMany('App\Disciplina', 'estudantes_disciplinas','estudante_id','disciplina_id');
    }

    public function temas($value='')
    {
      $this->hasMany('App\Tema');
    }
    public function supervisaos(){
    	return $this->hasMany('App\Supervisao');
    }
}
