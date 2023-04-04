<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Hladnjak extends Model
{
    use HasFactory;

    public function updateByname($food_name, $data = array())
    {
        return DB::table('hladnjaks')->where('food_name', '=', $food_name)->update($data);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ingredients(){
        return $this->belongsToMany(Ingredients::class);
    }

}
