<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class iamno1 extends Controller
{
    public function myfun(){
        return view("razr");       
    }
    public function add(Request $request){
        $sum=$request->num1+$request->num2;
        return view('sum',['ressaruto'=>$sum]);
    }
}

