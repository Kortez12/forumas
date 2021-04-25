<?php

namespace App\Http\Controllers;

use App\Models\City;

use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index()
    {
        $cities = City::all();
        //$countries = Country::orderBy('created_at', 'asc')->paginate(10);
        return view('index')->with('cities', $cities);
    }
}
