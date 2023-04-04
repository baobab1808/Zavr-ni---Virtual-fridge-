<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ingredients extends Model
{
    use HasFactory;


    public function hladnjaks(){
        return $this->belongsToMany(Hladnjak::class);
    }
    /*public function users(){
        return $this->belongsToMany(Users::class);
    }*/

    public function probas(){
        return $this->belongsToMany(Proba::class, 'ingredients_proba', 'ingredients_id', 'proba_id')->withPivot(['quantity', 'measurement_unit']);
    }

}
