<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ingredients;

class IngredientsSelect extends Component
{
    public $search = '';
    public function options($searchTerm = null) : Collection 
    {
        return collect([
            [
                'value' => 'meso',
                'description' => 'Meso',
            ],
            [
                'value' => 'namazi',
                'description' => 'Namazi',
            ],
            [
                'value' => 'suhomesnati proizvodi',
                'description' => 'Suhomesnati proizvodi',
            ], 
            [
                'value' => 'kiseliš',
                'description' => 'Kiseliš',
            ],  
            [
                'value' => 'umaci',
                'description' => 'Umaci',
            ],  
            [
                'value' => 'povrće',
                'description' => 'Povrće',
            ],  
            [
                'value' => 'riba',
                'description' => 'Riba',
            ],  
            [
                'value' => 'voće',
                'description' => 'Voće',
            ],  
            [
                'value' => 'orašasti plodovi',
                'description' => 'Orašasti plodovi',
            ], 
            [
                'value' => 'začini',
                'description' => 'Začini',
            ], 
            [
                'value' => 'riža',
                'description' => 'Riža',
            ], 
            [
                'value' => 'mliječni proizvodi',
                'description' => 'Mliječni proizvodi',
            ], 
            [
                'value' => 'tjestenina',
                'description' => 'Tjestenina',
            ],    
            [
                'value' => 'jaja',
                'description' => 'Jaja',
            ],  
            [
                'value' => 'masti, ulja i ocat',
                'description' => 'Masti, ulja i ocat',
            ],  
            [
                'value' => 'grickalice',
                'description' => 'Grickalice',
            ],  
            [
                'value' => 'pića',
                'description' => 'Pića',
            ],  
            [
                'value' => 'slatko',
                'description' => 'Slatko',
            ],    
            [
                'value' => 'žitarice',
                'description' => 'Žitarice',
            ],  
            [
                'value' => 'brašno',
                'description' => 'Brašno',
            ],  
            [
                'value' => 'kruh',
                'description' => 'Kruh',
            ],  
            [
                'value' => 'ostalo',
                'description' => 'Ostalo',
            ],   
        ]);
    }
    public function render(){
        return view('proba.ingredients', [
            'ing' => Ingredients::where('food_name', $this->search)->get(),
        ]);
    }
}