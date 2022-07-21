<?php

namespace App\Http\Controllers;

use App\Models\beca_talento;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storebeca_talentoRequest;
use App\Http\Requests\Updatebeca_talentoRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Resource\BecaTalentoResource;

class BecaTalentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BecaTalentoResource::collection(beca_talento::all());
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
     * @param  \App\Http\Requests\Storebeca_talentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storebeca_talentoRequest $request)
    {
        $postulacion = beca_talento::create($request->validated());
        return new BecaTalentoResource($postulacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\beca_talento  $beca_talento
     * @return \Illuminate\Http\Response
     */
    public function show(beca_talento $beca_talento)
    {
        return new BecaTalentoResource($beca_talento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\beca_talento  $beca_talento
     * @return \Illuminate\Http\Response
     */
    public function edit(beca_talento $beca_talento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatebeca_talentoRequest  $request
     * @param  \App\Models\beca_talento  $beca_talento
     * @return \Illuminate\Http\Response
     */
    public function update(Updatebeca_talentoRequest $request, beca_talento $beca_talento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\beca_talento  $beca_talento
     * @return \Illuminate\Http\Response
     */
    public function destroy(beca_talento $beca_talento)
    {
        $beca_talento->delete();
    }
}
