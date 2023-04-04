<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecipeRequest extends FormRequest{
    public function authorize(){
        return true;
    }

    public function rules(){
        return[

            'food_name.*' => [
                'string',
            ],
            'food_name' => [
                'array',
                'sometimes',
            ],
            'quantity' => [
                'array',
                'required if:food_name, on',
            ],

            'measurement_unit' => [
                'array',
                'required if:food_name, on',
            ]
        ];
    }

    public function only($keys){
        $keys = is_array($keys) ? $keys : func_get_args();
        $arr = parent::only($keys);
        return array_filter($arr, function($value){
            return($value !== null);
        });
    }
}