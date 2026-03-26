<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Loop extends Controller
{
    //
    function num($num){
        return view('forLoop',['number'=>$num]);

    }

}

