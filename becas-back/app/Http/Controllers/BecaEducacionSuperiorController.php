<?php

namespace App\Http\Controllers;

use App\Models\beca_educacion_superior;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storebeca_educacion_superiorRequest;
use App\Http\Requests\Updatebeca_educacion_superiorRequest;
use App\Http\Resources\BecaEducacionSuperiorResource;
use Illuminate\Support\Facades\DB;

class BecaEducacionSuperiorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BecaEducacionSuperiorResource::collection(beca_educacion_superior::all());
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
     * @param  \App\Http\Requests\Storebeca_educacion_superiorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storebeca_educacion_superiorRequest $request)
    {
        $postulacion = beca_educacion_superior::create($request->validated());
        return new BecaEducacionSuperiorResource($postulacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\beca_educacion_superior  $beca_educacion_superior
     * @return \Illuminate\Http\Response
     */
    public function show(beca_educacion_superior $beca_educacion_superior)
    {
        return new BecaEducacionSuperiorResource($beca_educacion_superior);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\beca_educacion_superior  $beca_educacion_superior
     * @return \Illuminate\Http\Response
     */
    public function edit(beca_educacion_superior $beca_educacion_superior)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatebeca_educacion_superiorRequest  $request
     * @param  \App\Models\beca_educacion_superior  $beca_educacion_superior
     * @return \Illuminate\Http\Response
     */
    public function update(Updatebeca_educacion_superiorRequest $request, beca_educacion_superior $beca_educacion_superior)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\beca_educacion_superior  $beca_educacion_superior
     * @return \Illuminate\Http\Response
     */
    public function destroy(beca_educacion_superior $beca_educacion_superior)
    {
        $beca_educacion_superior->delete();
    }
}
