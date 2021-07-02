<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;

class ImageSearch extends Component
{

    public $image = "";

    public function render()
    {
        return view('livewire.image-search',[
            "images" => Image::where('path','LIKE',"%{$this->image}%")->paginate(10),
        ]);
    }
}
