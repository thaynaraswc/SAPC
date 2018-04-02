<?php

namespace App\Http\Controllers;

use App\Models\SexoPessoa as sexo;
use Illuminate\Http\Request;

class SexoPessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sexo = sexo::all();
        return view('/ferramentasAdm/sexo/create', compact('sexo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexo = sexo::orderBy('descricao', 'asc')->get();
        return view('/ferramentasAdm/sexo/create', compact('sexo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sexo = new sexo;
        $sexo->descricao = $request->sexo;
        $sexo->save();
        return redirect('/ferramentasAdm/sexo/create'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SexoPessoa  $sexoPessoa
     * @return \Illuminate\Http\Response
     */
    public function show(SexoPessoa $sexoPessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SexoPessoa  $sexoPessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(SexoPessoa $sexoPessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SexoPessoa  $sexoPessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SexoPessoa $sexoPessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SexoPessoa  $sexoPessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(SexoPessoa $sexoPessoa)
    {
        //
    }
}
