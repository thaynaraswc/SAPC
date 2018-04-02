<?php

namespace App\Http\Controllers;

use App\Models\RegistroPessoa as registroPessoa;
use App\Models\Estados as estados;
use Illuminate\Http\Request;

class RegistroPessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }


    
    public function index()
    {
        return view('registroPessoa/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = estados::all();
        return view('registroPessoa/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registroPessoa = new registroPessoa;
        
        $registroPessoa->nomePessoa = $request->nomePessoa;
        $registroPessoa->escolaridade = $request->escolaridade;
        $registroPessoa->nacionalidade = $request->nacionalidade;
        $registroPessoa->estadoCivil = $request->estadoCivil;
        $registroPessoa->estadoNascimento = $request->estadoNascimento;
        $registroPessoa->nomeMaePessoa = $request->nomeMaePessoa;
        $registroPessoa->nomePaiPessoa = $request->nomePaiPessoa;
        $registroPessoa->endereco_pessoa = $request->endereco_pessoa;
        $registroPessoa->dataNascimento = $request->dataNascimento;
        $registroPessoa->cidadeNascimento = $request->cidadeNascimento;
        $registroPessoa->paisNascimento = $request->paisNascimento;
        $registroPessoa->documentos_pessoa = $request->documentos_pessoa;
        $registroPessoa->profissao = $request->profissao;
        $registroPessoa->localTrabalho = $request->localTrabalho;
        $registroPessoa->sexoPessoa = $request->sexoPessoa;
        $registroPessoa->save();
        view('registroPessoa/create', compact('estados'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistroPessoa  $registroPessoa
     * @return \Illuminate\Http\Response
     */
    public function show(RegistroPessoa $registroPessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistroPessoa  $registroPessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistroPessoa $registroPessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistroPessoa  $registroPessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistroPessoa $registroPessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistroPessoa  $registroPessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistroPessoa $registroPessoa)
    {
        //
    }
}
