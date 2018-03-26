<?php

namespace App\Http\Controllers;

use App\Models\FerramentasAdm;
use Illuminate\Http\Request;

class FerramentasAdmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ferramentasAdm/FinalidadeAlvara/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\FerramentasAdm  $ferramentasAdm
     * @return \Illuminate\Http\Response
     */
    public function show(FerramentasAdm $ferramentasAdm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FerramentasAdm  $ferramentasAdm
     * @return \Illuminate\Http\Response
     */
    public function edit(FerramentasAdm $ferramentasAdm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FerramentasAdm  $ferramentasAdm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FerramentasAdm $ferramentasAdm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FerramentasAdm  $ferramentasAdm
     * @return \Illuminate\Http\Response
     */
    public function destroy(FerramentasAdm $ferramentasAdm)
    {
        //
    }
}
