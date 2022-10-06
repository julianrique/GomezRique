<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        $hola = "Prueba para Felix";
        return view("welcome",compact("hola"));
    }
}
