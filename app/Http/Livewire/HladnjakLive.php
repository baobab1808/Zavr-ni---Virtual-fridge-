<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HladnjakLive extends Component
{

    public $content = [];

    public function mount($content)
    {
        $this->content = $content;
        /*foreach($content as $item){
            $jednaStavka = [$item->id, $item->title, $item->rec_category, $item->author, $item->cover_image];
            array_push($content, $jednaStavka);
        }*/
        
    }
    public function render()
    {
        return view('livewire.hladnjak-live');
    }
}
