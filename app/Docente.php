<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    public function departamento()
    {
    	return $this->belongsTo('App\Departamento');
    }

        public function areas_de_interesse()
    {
    	 return $this->belongsToMany('App\Area', 'docente_areas', 'area_id', 'docente_id');
    }
}
