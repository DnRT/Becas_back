<?php

namespace App\Http\Controllers;

use App\Models\Becas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorebecasRequest;
use App\Http\Requests\UpdatebecasRequest;
use App\Http\Resources\BecasResource;

class BecasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BecasResource::collection(Becas::all());
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
     * @param  \App\Http\Requests\StorebecasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebecasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\becas  $becas
     * @return \Illuminate\Http\Response
     */
    public function show(Becas $beca)
    {
        return new BecasResource($beca);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\becas  $becas
     * @return \Illuminate\Http\Response
     */
    public function edit(Becas $beca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebecasRequest  $request
     * @param  \App\Models\becas  $becas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebecasRequest $request, Becas $beca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\becas  $becas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Becas $beca)
    {
        //
    }
}
