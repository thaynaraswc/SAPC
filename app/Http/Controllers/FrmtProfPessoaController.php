<?php

namespace App\Http\Controllers;

use App\Models\FrmtProfPessoa as profpessoa;
use Illuminate\Http\Request;

class FrmtProfPessoaController extends Controller
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
        $prof = profpessoa::all();
        return view('/ferramentasAdm/ProfissaoPessoa/create', compact('prof'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prof = new profpessoa;
        $prof->descricao = $request->nomeProfissao;
        $prof->save();
        return redirect('/ferramentasAdm/ProfissaoPessoa/create'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FrmtProfPessoa  $frmtProfPessoa
     * @return \Illuminate\Http\Response
     */
    public function show(FrmtProfPessoa $frmtProfPessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FrmtProfPessoa  $frmtProfPessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(FrmtProfPessoa $frmtProfPessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FrmtProfPessoa  $frmtProfPessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrmtProfPessoa $frmtProfPessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FrmtProfPessoa  $frmtProfPessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrmtProfPessoa $frmtProfPessoa)
    {
        //
    }
}
