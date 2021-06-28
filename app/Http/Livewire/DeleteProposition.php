<?php

namespace App\Http\Livewire;

use App\Models\Proposition;
use Livewire\Component;

class DeleteProposition extends Component
{
    public string $search ="";
    protected $queryString = [
        "search" =>['except'=>''],
    ];
    
   
    public function render()
    {
        return view('livewire.delete-proposition',[
            "propos" => Proposition::where('propos','LIKE',"%{$this->search}%")->get(),
        ]);
    }

}
