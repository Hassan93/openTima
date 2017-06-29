<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    public function departamento()
    {
    	return $this->belongsTo('App\Departamento');
    }

        public function areas()
    {
    	 return $this->belongsToMany('App\Area', 'area_docentes','docente_id','area_id');
    }
    public function supervisaos(){

      	return $this->hasMany('App\Supervisao','supervisor_id');
      }
}
