<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Autos extends Model
{
    use HasFactory, SoftDeletes;

    public function locations() {
        return $this->belongsToMany(Autos::class, "locations_autos","autos_id","locations_id");
    }
}
