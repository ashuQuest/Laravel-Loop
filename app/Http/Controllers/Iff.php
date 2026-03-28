<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Iff extends Controller
{
    // Function name: iff
    public function iff($num)
    {
        $num = (int) $num; // Ensure input is integer
        return view('iffsta', ['number' => $num]);
    }
}



