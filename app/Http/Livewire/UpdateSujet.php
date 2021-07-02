<?php

namespace App\Http\Livewire;

use App\Models\Sujet;
use Livewire\Component;

class UpdateSujet extends Component
{

    public string $sujet ="";

    public function render()
    {
        return view('livewire.update-sujet',[
            "sujets" => Sujet::where('title','LIKE',"%{$this->sujet}%")->get(),
        ]);
    }
}

