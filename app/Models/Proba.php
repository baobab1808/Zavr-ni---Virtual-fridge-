<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proba extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'author_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ingredients(){
        return $this->belongsToMany(Ingredients::class, 'ingredients_proba', 'proba_id', 'ingredients_id')->withPivot(['quantity', 'measurement_unit'])->using(IngredientsProba::class);
    }
}
