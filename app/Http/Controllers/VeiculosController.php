<?php

namespace App\Http\Controllers;

use App\Models\Veiculos;
use App\Http\Requests\StoreVeiculosRequest;
use App\Http\Requests\UpdateVeiculosRequest;
use Inertia\Inertia;

class VeiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Veiculos/Index');
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
     * @param  \App\Http\Requests\StoreVeiculosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVeiculosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Veiculos  $veiculos
     * @return \Illuminate\Http\Response
     */
    public function show(Veiculos $veiculos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Veiculos  $veiculos
     * @return \Illuminate\Http\Response
     */
    public function edit(Veiculos $veiculos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVeiculosRequest  $request
     * @param  \App\Models\Veiculos  $veiculos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVeiculosRequest $request, Veiculos $veiculos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Veiculos  $veiculos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Veiculos $veiculos)
    {
        //
    }
}
