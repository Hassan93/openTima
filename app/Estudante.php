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
    	return $this->belongsToMany('App\Disciplina', 'estudante_disciplina', 'estudante_id', 'disciplina_id');
    }
}
