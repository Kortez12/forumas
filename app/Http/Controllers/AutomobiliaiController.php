<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

class AutomobiliaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $automobiliai = Auto::all();
        //$return Post::where('title', 'Post Two')->get();
        //$posts = Post::orderBy('title', 'desc')->take(1)->get();
        //$posts = Post::orderBy('title', 'desc')->get();

        //$posts = Auto::orderBy('created_at', 'asc')->paginate(10);
        return view('temos.automobiliai.index')->with('automobiliai', $automobiliai);

        //  $posts = DB::select('select * from posts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temos.automobiliai.pcreate');
        //return redirect()->action([AutomobiliaiController::class, 'index']);
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
        $automobiliai = new Auto;
        $automobiliai->pavadinimas = $request->input('pavadinimas');
        $automobiliai->tekstas = $request->input('tekstas');
        $automobiliai->save();

        return redirect('/automobiliai')->with('success', 'Tema sekmingai sukurta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $automobiliai = Auto::find($id);
        return view('temos.automobiliai.show')->with('automobiliai', $automobiliai);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $automobiliai = Auto::find($id);
        return view('temos.automobiliai.edit')->with('automobiliai', $automobiliai);
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
        $automobiliai = Auto::find($id);
        $automobiliai->pavadinimas = $request->input('pavadinimas');
        $automobiliai->tekstas = $request->input('tekstas');
        $automobiliai->save();

        return redirect('/automobiliai')->with('success', 'Įrašas sėkmingai redaguotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $automobiliai = Auto::find($id);
        $automobiliai->delete();

        return redirect('/automobiliai')->with('success', 'Tema ištrinta');
    }
}
