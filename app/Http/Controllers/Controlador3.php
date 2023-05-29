<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Controlador3 extends Controller
{
    public function index(){
        return view('infoviews/infomanga');
    }
}

class Inicio extends Controller
{
    
    public function index(){
        return view('infoviews/infopeliseries');
    }
}

class Inicio extends Controller
{
    
    public function index(){
        return view('infoviews/infojuegos');
    }
}

class Inicio extends Controller
{
    
    public function index(){
        return view('infoviews/inforecomendaciones');
    }
}

