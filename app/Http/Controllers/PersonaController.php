<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
    	$nombre = "Martin";

    	return view('persona.index')
    				->with('variable', $nombre);

    }
}
