<?php

namespace App\Http\Controllers;

use App\Models\Nacionalidades as nacionalidade;
use Illuminate\Http\Request;

class NacionalidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nacionalidade = nacionalidade::all();
        return view('/ferramentasAdm/Nacionalidade/create', compact('nacionalidade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nacionalidade = nacionalidade::orderBy('descricao', 'asc')->get();
        return view('/ferramentasAdm/Nacionalidade/create', compact('nacionalidade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nacionalidade = new nacionalidade;
        $nacionalidade->descricao = $request->nomeNacionalidade;
        $nacionalidade->save();
        return redirect('/ferramentasAdm/Nacionalidade/create'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nacionalidades  $nacionalidades
     * @return \Illuminate\Http\Response
     */
    public function show(Nacionalidades $nacionalidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nacionalidades  $nacionalidades
     * @return \Illuminate\Http\Response
     */
    public function edit(Nacionalidades $nacionalidades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nacionalidades  $nacionalidades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nacionalidades $nacionalidades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nacionalidades  $nacionalidades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nacionalidades $nacionalidades)
    {
        //
    }
}
