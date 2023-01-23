<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function checkEnergy(Request $request){
        $energy = $request->input('energy');
        if($energy > 8000){
            $energy = "maior que 8000";
        }else{
            $energy = "inseto";
        }
        return view('dbz', compact('energy'));
    }
}
