<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function carousel(){
        return view('inc.carousel');
    }
}
