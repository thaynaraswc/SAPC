<?php

namespace App\Http\Controllers;

use App\Pdfview;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\GrauEscolaridade;
use App\Models\Estados;

class PdfviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $model;
    public function __construct(Estados $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $data['model'] = $this->model->all();
        return PDF::loadView('viewpdf', $data)
            ->stream();
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
     * @param  \App\Pdfview  $pdfview
     * @return \Illuminate\Http\Response
     */
    public function show(Pdfview $pdfview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pdfview  $pdfview
     * @return \Illuminate\Http\Response
     */
    public function edit(Pdfview $pdfview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pdfview  $pdfview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pdfview $pdfview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pdfview  $pdfview
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pdfview $pdfview)
    {
        //
    }
}
