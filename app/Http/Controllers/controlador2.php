<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Inicio extends Controller
{
    
    public function index(){
        return view('manga');
    }
}

class Inicio extends Controller
{
    
    public function index(){
        return view('peliseries');
    }
}

class Inicio extends Controller
{
    
    public function index(){
        return view('juegos');
    }
}

class Inicio extends Controller
{
    
    public function index(){
        return view('recomendaciones');
    }
}