<?php

namespace App\Http\Controllers\Guests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MonografiasTemaController extends Controller
{
    public function monografias()
    {
      return view('guests.monografias.index');
    }
}
