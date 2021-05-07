<?php

namespace App\Http\Controllers;

use App\Models\Laisvalaikis;
use Illuminate\Http\Request;

class LaisvalaikisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laisvalaikis = Laisvalaikis::all();
        //$return Post::where('title', 'Post Two')->get();
        //$posts = Post::orderBy('title', 'desc')->take(1)->get();
        //$posts = Post::orderBy('title', 'desc')->get();

        //$posts = Laisvalaikis::orderBy('created_at', 'asc')->paginate(10);
        return view('temos.laisvalaikis.index')->with('laisvalaikis', $laisvalaikis);

        //  $posts = DB::select('select * from posts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temos.laisvalaikis.pcreate');
        //return redirect()->action([laisvalaikisController::class, 'index']);
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
        $laisvalaikis = new Laisvalaikis;
        $laisvalaikis->pavadinimas = $request->input('pavadinimas');
        $laisvalaikis->tekstas = $request->input('tekstas');
        $laisvalaikis->save();

        return redirect('/laisvalaikis')->with('success', 'Tema sekmingai sukurta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laisvalaikis = Laisvalaikis::find($id);
        return view('temos.laisvalaikis.show')->with('laisvalaikis', $laisvalaikis);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laisvalaikis = Laisvalaikis::find($id);
        return view('temos.laisvalaikis.edit')->with('laisvalaikis', $laisvalaikis);
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
        $laisvalaikis = Laisvalaikis::find($id);
        $laisvalaikis->pavadinimas = $request->input('pavadinimas');
        $laisvalaikis->tekstas = $request->input('tekstas');
        $laisvalaikis->save();

        return redirect('/laisvalaikis')->with('success', 'Įrašas sėkmingai redaguotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laisvalaikis = Laisvalaikis::find($id);
        $laisvalaikis->delete();

        return redirect('/laisvalaikis')->with('success', 'Tema ištrinta');
    }
}
