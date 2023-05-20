<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Narudzbina extends Model
{
    use HasFactory;
    protected $fillable = [
        'datum',
        'korisnik_id',
        'proizvod_id',
         
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function proizvod()
    {
        return $this->belongsTo(Proizvod::class);
    }
}
