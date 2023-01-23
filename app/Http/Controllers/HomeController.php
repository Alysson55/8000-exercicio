<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function name(){
        $names = ['Andre,','Joao'];
        return view('names', compact('names'));
    }
     
}
