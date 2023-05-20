<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProizvodResource;
use App\Models\Proizvod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProizvodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //GET
    {
        return ProizvodResource::collection(Proizvod::all());
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
    public function store(Request $request) //POST
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required',
            'opis' => 'required',
            'cena' => 'required|numeric',
            'kategorija_id' => 'required|exists:kategorijas,id',
            'slika' => 'required',
 
        ]);

        if ($validator->fails()) {
            return response()->json(['poruka' => 'Validacija nije prošla.', 'greske' => $validator->errors()], 400);
        }

        $proizvod = Proizvod::create($request->all());

        return response()->json(['poruka' => 'Proizvod je uspešno kreiran.', 'proizvod' => $proizvod], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function show($id)//GET
    {
        return new ProizvodResource( Proizvod::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function edit(Proizvod $proizvod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)  //PUT
    {
        $proizvod = Proizvod::find($id);

        if (!$proizvod) {
            return response()->json(['poruka' => 'Proizvod nije pronađen.'], 404);
        }

        $validator = Validator::make($request->all(), [
            'naziv' => 'required',
            'opis' => 'required',
            'cena' => 'required|numeric',
            'kategorija_id' => 'required|exists:kategorijas,id',
            
        ]);

        if ($validator->fails()) {
            return response()->json(['poruka' => 'Validacija nije prošla.', 'greske' => $validator->errors()], 400);
        }

        $proizvod->update($request->all());

        return response()->json(['poruka' => 'Proizvod je uspešno ažuriran.', 'proizvod' => $proizvod], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//DELETE
    {
        $p = Proizvod::find($id);
        if($p){
            $p->delete();
            return response()->json(['poruka' => 'Proizvod je uspešno obrisan.'], 200);
        }else{
            return response()->json(['poruka' => 'Proizvod nije pronađen.'], 404);
        }
    }
}
