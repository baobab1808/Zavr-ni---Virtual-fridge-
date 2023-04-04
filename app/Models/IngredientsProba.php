<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class IngredientsProba extends Pivot{

    protected $fillable = ['ingredients_id', 'proba_id','quantity', 'measurement_unit'];

    protected $primaryKey = ['ingredients_id', 'proba_id'];

    public function food(){
        return $this->belongsTo(Ingredients::class, 'ingredients_id');
    }
}