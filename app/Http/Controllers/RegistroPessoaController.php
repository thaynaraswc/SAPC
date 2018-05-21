<?php

namespace App\Http\Controllers;

use App\Models\RegistroPessoa as registroPessoa;
use App\Models\Estados as estados;
use App\Models\Municipios as Municipios;
use App\Models\GrauEscolaridade as escolaridade;
use App\Models\EstadoCivil as estadoCivil;
use App\Models\FrmtProfPessoa as FrmtProfPessoa;
use App\Models\SexoPessoa as SexoPessoa;
use App\Models\Paises as Paises;
use App\Models\EnderecoPessoa as EnderecoPessoa;
use App\Models\DocumentosPessoa as DocumentosPessoa;
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
        $municipios = Municipios::all();
        $escolaridade = escolaridade::all();
        $estadoCivil = estadoCivil::all();
        $FrmtProfPessoa = FrmtProfPessoa::all();
        $SexoPessoa = SexoPessoa::all();
        $Paises = Paises::all();
        $registroPessoa = registroPessoa::all();
        $EnderecoPessoa = EnderecoPessoa::all();
        //dd($municipios);
        return view('registroPessoa/create', compact('estados', 'escolaridade','estadoCivil', 'FrmtProfPessoa', 'SexoPessoa', 'registroPessoa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $enderecoPessoa = new EnderecoPessoa;
        $enderecoPessoa->cepEnderecoPessoa = $request->cepEnderecoPessoa;
        $enderecoPessoa->bairoEnderecoPessoa = $request->bairoEnderecoPessoa;
        $enderecoPessoa->enderecoPessoa = $request->enderecoPessoa;
        $enderecoPessoa->numeroEnderecoPessoa = $request->numeroEnderecoPessoa;
        $enderecoPessoa->complementoEnderecoPessoa = $request->complementoEnderecoPessoa;
        $enderecoPessoa->estadoEnderecoPessoa = $request->estadoEnderecoPessoa;
        $enderecoPessoa->cidadeEnderecoPessoa = $request->cidadeEnderecoPessoa;
        $enderecoPessoa->referenciaEnderecoPessoa = $request->referenciaEnderecoPessoa;

        $enderecoPessoa->save();

        $registroPessoa = new registroPessoa;
        $registroPessoa->nomePessoa = $request->nomePessoa;
        $registroPessoa->escolaridade = $request->escolaridade;
        $registroPessoa->estadoCivil = $request->estadoCivil;
        $registroPessoa->estadoNascimento = $request->estadoNascimento;
        $registroPessoa->nomeMaePessoa = $request->nomeMaePessoa;
        $registroPessoa->nomePaiPessoa = $request->nomePaiPessoa;
        $registroPessoa->endereco_pessoa = $request->endereco_pessoa;
        $registroPessoa->dataNascimento = $request->dataNascimento;
        $registroPessoa->cidadeNascimento = $request->cidadeNascimento;
        //$registroPessoa->documentos_pessoa = $request->documentos_pessoa;
        $registroPessoa->profissao = $request->profissao;
        $registroPessoa->localTrabalho = $request->localTrabalho;
        $registroPessoa->sexoPessoa = $request->sexoPessoa;
        //$registroPessoa->save();

        $registroPessoa->endereco_pessoa = $enderecoPessoa->id;
        $registroPessoa->save();
        return redirect('registroPessoa/create');
        
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
