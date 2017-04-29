<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function cursos()
    {
    	return $this->hasMany('App\Curso');
    }

    public function docentes()
    {
    	return $this->hasMany('App\Docente');
    }

    public function chefe()
    {
    	return $this->hasOne('App\Docente', 'chefe_id');
    }
}
