<?php

namespace App\Http\Controllers;
use App\Models\RegistroPessoa as registroPessoa;
use App\Models\Estados as estados;
use App\Models\Municipios as Municipios;
use App\Models\GrauEscolaridade as escolaridade;
use App\Models\EstadoCivil as estadoCivil;
use App\Models\FrmtProfPessoa as FrmtProfPessoa;
use App\Models\SexoPessoa as SexoPessoa;
use App\Models\FrmtFinAlvara as FrmtFinAlvara;
use Illuminate\Http\Request;

class RegistroEmpresaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registroEmpresa/create');
    }

    public function create()
    {
        $estados = estados::all();
        $municipios = Municipios::all();
        $escolaridade = escolaridade::all();
        $estadoCivil = estadoCivil::all();
        $FrmtProfPessoa = FrmtProfPessoa::all();
        $SexoPessoa = SexoPessoa::all();
        $FrmtFinAlvara = FrmtFinAlvara::all();
        //dd($municipios);
        return view('registroEmpresa/create', compact('estados', 'FrmtProfPessoa', 'FrmtFinAlvara'));
    }
}
