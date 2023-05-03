<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Locations extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ["nombre","descripcion","municipio"];

    public function autos() {
        return $this->belongsToMany(Autos::class,"locations_autos","locations_id","autos_id");
    }
    public function autos_disponibles() {
        return $this->belongsToMany(Autos::class,"locations_autos","locations_id","autos_id")->wherePivot("disponibilidad",1);
    }
}
