<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    public function departamento()
    {
    	return $this->belongsTo('App\Departamento');
    }

        public function areas_cientificas()
    {
    	 return $this->belongsToMany('App\Area', 'area_docentes', 'area_id', 'docente_id');
    }
}
