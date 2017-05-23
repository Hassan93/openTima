<?php

namespace App\Http\Controllers\Estudante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Departamento;
use App\Curso;

class HomeController extends Controller
{
  public function home()
  {

     return view('estudante.home');
  }
}
