<?php

namespace App\Http\Controllers;

use App\Models\Datapeta;
use App\Http\Requests\StoreDatapetaRequest;
use App\Http\Requests\UpdateDatapetaRequest;

class DatapetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.datapeta_admin', [
            'title' => 'DataPeta'
        ]);
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
     * @param  \App\Http\Requests\StoreDatapetaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDatapetaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datapeta  $datapeta
     * @return \Illuminate\Http\Response
     */
    public function show(Datapeta $datapeta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datapeta  $datapeta
     * @return \Illuminate\Http\Response
     */
    public function edit(Datapeta $datapeta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDatapetaRequest  $request
     * @param  \App\Models\Datapeta  $datapeta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDatapetaRequest $request, Datapeta $datapeta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datapeta  $datapeta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datapeta $datapeta)
    {
        //
    }
}
