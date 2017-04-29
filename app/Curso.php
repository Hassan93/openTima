<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function departamento()
    {
    	return $this->belongsTo('App\departamento');
    }
    public function estudantes()
    {
    	return $this->hasMany('App\Estudante');
    }   

    public function areas_de_interesse($value='')
     {
     	return $this->hasMany('App\Areas');
     } 
    public function disciplinas()
    {
        return $this->belongsToMany('App\Disciplina', 'curso_disciplina', 'curso_id', 'disciplina_id');

    }
}
