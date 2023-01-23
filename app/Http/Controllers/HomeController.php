<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function clientes(){
        $clientes = ['Andre,','Joao'];
        return view('clientes', compact('clientes'));
    }
     
}
