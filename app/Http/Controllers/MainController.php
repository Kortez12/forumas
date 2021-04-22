<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\State;
use App\City;

class MainController extends Controller
{
    public function index(){
    	$countries = Country::all();
        //$countries = Country::orderBy('created_at', 'asc')->paginate(10);
        return view('index')->with('countries', $countries);
    }
   
}