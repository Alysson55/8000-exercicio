<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DbzController extends Controller
{
    public function checkEnergy(Request $request){
        $energy = $request->input('energy');
        if($energy > 8000){
            $message = "maior que 8000";
        }else{
            $message = "inseto";
        }
        return view('dbz', compact('message'));
    }
}
