<?php

namespace App\Http\Controllers;

use App\Http\Resources\NarudzbinaResource;
use App\Models\Narudzbina;
use Illuminate\Http\Request;

class NarudzbinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return NarudzbinaResource::collection(Narudzbina::all());
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
     * @param  \App\Models\Narudzbina  $narudzbina
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new NarudzbinaResource(Narudzbina::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Narudzbina  $narudzbina
     * @return \Illuminate\Http\Response
     */
    public function edit(Narudzbina $narudzbina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Narudzbina  $narudzbina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Narudzbina $narudzbina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Narudzbina  $narudzbina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Narudzbina $narudzbina)
    {
        //
    }
}
