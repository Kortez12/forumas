<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Muzika;
use App\Models\Auto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        // dd($user->masina);
        return view('home')->with('automobiliai', $user->masina)->with('knygos', $user->knygos)->with('laisvalaikis', $user->laisvalaikis)->with('muzikos', $user->muzika);
        // return view('home')->with('knygos', $user->muzika);
    }
}
