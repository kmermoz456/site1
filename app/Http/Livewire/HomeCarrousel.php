<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;

class HomeCarrousel extends Component
{
    public function render()
    {
        return view('livewire.home-carrousel',[
            "images" => Image::where('type',"slider")->get()
        ]);
    }
}
