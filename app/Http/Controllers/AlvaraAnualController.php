<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlvaraAnualController extends Controller
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
        return view('alvaraAnual/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alvaraAnual/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
