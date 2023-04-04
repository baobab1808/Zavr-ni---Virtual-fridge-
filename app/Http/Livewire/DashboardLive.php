<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DashboardLive extends Component
{
    public $content = [];
    public $kategorija;
    public $vrijeme;

    public function mount($content)
    {
        $this->content = $content;
        /*foreach($content as $item){
            $jednaStavka = [$item->id, $item->title, $item->rec_category, $item->author, $item->cover_image];
            array_push($content, $jednaStavka);
        }*/
        
        $this->kategorija = "---";
        $this->vrijeme = "---";
    }

    public function render()
    {
        return view('livewire.dashboard-live');
    }
}
