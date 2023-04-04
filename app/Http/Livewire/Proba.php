<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Models\Ingredients;

class Proba extends Component
{

    public $ingredients, $food_name, $quantity, $measurement_unit, $food_id;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    /**
     * Write code on Method
     * 
     * @return response()
     */

    public function add($i){
        $i = $i+1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    /**
     * Write code on Method
     * 
     * @return response()
     */

    public function remove($i){
        unset($this->inputs[$i]);
    }

    /**
     * Write code on Method
     * 
     * @return response()
     */

    public function render(){
        $this->ingredients = Ingredients::all();
        return view('livewire.proba');
    }


    private function resetInputFields(){
        $this->food_name = '';
        $this->quantity = '';
        $this->measurement_unit = '';
    }

    public function store(){
        $validatedDate = $this->validate([
            'food_name.0' => 'required',
            'quantity.0' => 'required',
            'measurement_unit.0' => 'required',
            'food_name.*' => 'required',
            'quantity.*' => 'required',
            'measurement_unit.*' => 'required',
        ]);
        foreach($this->food_name as $key => $value){
            
        }
    }
}
