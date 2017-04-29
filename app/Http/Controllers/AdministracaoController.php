<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class AdministracaoController extends Controller
{
    public function teste()
    {
      return view('administrador.home');
    }
    public function departamentos($value='')
    {
      return view('departamentos.index');
    }

    public function cadastros($value='')
    {
      $departamentos = Departamento::all();
      return view('administrador.cadastros')->withDepartamentos($departamentos);
    }
}
