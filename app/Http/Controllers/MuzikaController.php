<?php

namespace App\Http\Controllers;

use App\Models\Muzika;
use Illuminate\Http\Request;

class MuzikaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muzika = Muzika::all();
        //$return Post::where('title', 'Post Two')->get();
        //$posts = Post::orderBy('title', 'desc')->take(1)->get();
        //$posts = Post::orderBy('title', 'desc')->get();

        //$posts = Muzika::orderBy('created_at', 'asc')->paginate(10);
        return view('temos.muzika.index')->with('muzika', $muzika);

        //  $posts = DB::select('select * from posts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temos.muzika.pcreate');
        //return redirect()->action([MuzikamobiliaiController::class, 'index']);
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
        $muzika = new Muzika;
        $muzika->pavadinimas = $request->input('pavadinimas');
        $muzika->tekstas = $request->input('tekstas');
        $muzika->save();

        return redirect('/muzika')->with('success', 'Tema sekmingai sukurta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $muzika = Muzika::find($id);
        return view('temos.muzika.show')->with('muzika', $muzika);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $muzika = Muzika::find($id);
        return view('temos.muzika.edit')->with('muzika', $muzika);
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
        $muzika = Muzika::find($id);
        $muzika->pavadinimas = $request->input('pavadinimas');
        $muzika->tekstas = $request->input('tekstas');
        $muzika->save();

        return redirect('/muzika')->with('success', 'Įrašas sėkmingai redaguotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $muzika = Muzika::find($id);
        $muzika->delete();

        return redirect('/muzika')->with('success', 'Tema ištrinta');
    }
}
