<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function energy(){
        $energy = 8001;
        return view('dbz', compact('energy'));
    }
     
}
