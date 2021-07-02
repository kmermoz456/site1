<?php

namespace App\Http\Livewire;

use App\Models\Proposition;
use App\Models\Question;
use Livewire\Component;

class UpdatePropos extends Component
{
    public $propo ="";

    public function render()
    {
        return view('livewire.update-propos',[
            "propos" => Proposition::where('propos','LIKE',"%{$this->propo}%")->get(),
        ]);
    
    }
}
