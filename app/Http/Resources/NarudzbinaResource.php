<?php

namespace App\Http\Resources;

use App\Models\Proizvod;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class NarudzbinaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return 
        [
            'id' => $this->id,
            'datum' => $this->datum,
            'proizvod' =>  new ProizvodResource(Proizvod::find($this->proizvod_id)),
            'korisnik' =>  User::find($this->korisnik_id)
        ];
    }
}
