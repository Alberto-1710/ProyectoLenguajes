<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home($nombre){
        return view("home", compact("nombre"));
    }
}

