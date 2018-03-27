<?php

namespace App\Http\Controllers;

use App\Models\FrmtFinAlvara as FinAlvara;
use Illuminate\Http\Request;

class FrmtFinAlvaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $finAlvara = FinAlvara::all();
        return view('ferramentasAdm/FinalidadeAlvara/create', compact('finAlvara'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $FerramentasAdmn = new FinAlvara;
        $FerramentasAdmn->nome = $request->nomeFinalidadeAlvara;
        $FerramentasAdmn->descricao = $request->descricaoFinalidadeAlvara;
        $FerramentasAdmn->valor = $request->valorFinalidadeAlvara;
        $FerramentasAdmn->save();
        return redirect('ferramentasAdm/FinalidadeAlvara/create'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FrmtFinAlvara  $frmtFinAlvara
     * @return \Illuminate\Http\Response
     */
    public function show(FrmtFinAlvara $frmtFinAlvara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FrmtFinAlvara  $frmtFinAlvara
     * @return \Illuminate\Http\Response
     */
    public function edit(FrmtFinAlvara $frmtFinAlvara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FrmtFinAlvara  $frmtFinAlvara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrmtFinAlvara $frmtFinAlvara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FrmtFinAlvara  $frmtFinAlvara
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrmtFinAlvara $frmtFinAlvara)
    {
        //
    }
}
