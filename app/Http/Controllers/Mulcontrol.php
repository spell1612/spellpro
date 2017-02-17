<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mulcontrol extends Controller{
    public function mulfun(){
        return view('mul');
    }
    public function multiply(Request $req){
        $prod=$req->num1*$req->num2;
        return view('prod',['prodval'=>$prod]);
    }
}