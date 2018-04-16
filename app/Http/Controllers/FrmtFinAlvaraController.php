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
        $finAlvara = FinAlvara::orderBy('nome', 'asc')->get();
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
        $finAlvara = new FinAlvara;
        $finAlvara->nome = $request->nomeFinalidadeAlvara;
        $finAlvara->descricao = $request->descricaoFinalidadeAlvara;
        $finAlvara->valor = $request->valorFinalidadeAlvara;
        $finAlvara->save();
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
    public function edit(FinAlvara $finAlvara)
    {
        $finAlvara = FinAlvara::where('id', $finAlvara->id)->get()->first();

        //dd($localidade);
        return view('ferramentasAdm/FinalidadeAlvara/edit', compact('finAlvara'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FrmtFinAlvara  $frmtFinAlvara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $finAlvara = FinAlvara::find($id);
        $finAlvara->nome = $request->nomeFinalidadeAlvara;
        $finAlvara->descricao = $request->descricaoFinalidadeAlvara;
        $finAlvara->valor = $request->valorFinalidadeAlvara;

        $finAlvara->save();

        return redirect('ferramentasAdm/FinalidadeAlvara/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FrmtFinAlvara  $frmtFinAlvara
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $finAlvara = FinAlvara::find($id);
        $nome= $finAlvara->nome;
        try{

            $finAlvara->delete();
           
            return redirect('ferramentasAdm/FinalidadeAlvara/create');
        }catch(QueryException $e){
            return $e;
        }   
    }
}
