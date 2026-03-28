<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Loop extends Controller
{
    //
    function num($num){
        return view('forLoop',['number'=>$num]);

    }

    function while($num){
        return view('WhileLoop',['number'=>$num]);
    }
    

}


