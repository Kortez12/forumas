<?php

namespace App\Http\Controllers;

use App\Models\Knygos;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class KnygosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('verified', ['auth', ['except' => ['index', 'show']]]);
    }

    public function index()
    {
        Paginator::useBootstrap();
        $knygos = knygos::orderBy('id', 'desc')->paginate(5);
        //$return Post::where('title', 'Post Two')->get();
        //$posts = Post::orderBy('title', 'desc')->take(1)->get();
        //$posts = Post::orderBy('title', 'desc')->get();

        //$posts = Auto::orderBy('created_at', 'asc')->paginate(10);
        return view('temos.knygos.index')->with('knygos', $knygos);

        //  $posts = DB::select('select * from posts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temos.knygos.pcreate');
        //return redirect()->action([knygosController::class, 'index']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'pavadinimas' => 'required',
            'tekstas' => 'required'
        ]);

        // Sukurti irasa
        $knygos = new knygos;
        $knygos->pavadinimas = $request->input('pavadinimas');
        $knygos->tekstas = $request->input('tekstas');
        $knygos->user_id = auth()->user()->id;
        $knygos->save();

        return redirect('/knygos')->with('success', 'Tema sekmingai sukurta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $knygos = knygos::find($id);
        return view('temos.knygos.show')->with('knygos', $knygos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $knygos = knygos::find($id);
        // Patikrinimas kad teisingas useris
        if (auth()->user()->id !== $knygos->user_id) {
            return redirect('/knygos')->with('error', 'Negalima redaguoti ne savo įrašą!');
        }
        return view('temos.knygos.edit')->with('knygos', $knygos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'pavadinimas' => 'required',
            'tekstas' => 'required'
        ]);

        // Sukurti irasa
        $knygos = knygos::find($id);
        $knygos->pavadinimas = $request->input('pavadinimas');
        $knygos->tekstas = $request->input('tekstas');
        $knygos->save();

        return redirect('/knygos')->with('success', 'Įrašas sėkmingai redaguotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $knygos = knygos::find($id);
        $knygos->delete();
        if (auth()->user()->id !== $knygos->user_id) {
            return redirect('/knygos')->with('error', 'Negalima trinti ne savo įrašą!');
        }
        return redirect('/home')->with('success', 'Tema ištrinta');
    }
}
