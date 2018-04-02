<?php

namespace App\Http\Controllers;

use App\Models\GrauEscolaridade as escolaridade;
use Illuminate\Http\Request;

class GrauEscolaridadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escolaridade = escolaridade::all();
        return view('/ferramentasAdm/grauEscolaridade/create', compact('escolaridade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grauEsc = escolaridade::orderBy('descricao', 'asc')->get();
        return view('/ferramentasAdm/grauEscolaridade/create', compact('escolaridade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $escolaridade = new escolaridade;
        $escolaridade->descricao = $request->grauEscolaridade;
        $escolaridade->save();
        return redirect('/ferramentasAdm/grauEscolaridade/create'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GrauEscolaridade  $grauEscolaridade
     * @return \Illuminate\Http\Response
     */
    public function show(GrauEscolaridade $grauEscolaridade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GrauEscolaridade  $grauEscolaridade
     * @return \Illuminate\Http\Response
     */
    public function edit(GrauEscolaridade $grauEscolaridade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GrauEscolaridade  $grauEscolaridade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GrauEscolaridade $grauEscolaridade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GrauEscolaridade  $grauEscolaridade
     * @return \Illuminate\Http\Response
     */
    public function destroy(GrauEscolaridade $grauEscolaridade)
    {
        //
    }
}
