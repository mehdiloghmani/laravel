<?php

namespace App\Http\Controllers;

use App\Models\clip;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index()
    {

     $mostpopularclips = clip::all()->random(6);
     $mostviewedclips= clip::all()->random(6);
       return view('index' , compact('mostpopularclips','mostviewedclips'));
    }
}
