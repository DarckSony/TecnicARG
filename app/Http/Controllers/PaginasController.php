<?php

namespace App\Http\Controllers;
use App\htpp\controllers\controller;

class PaginasController extends Controller
{
    public function perfil(){
    	return view('perfil');
    }
}
