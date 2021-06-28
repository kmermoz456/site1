<?php

namespace App\Http\Livewire;

use App\Models\Sujet;
use Livewire\Component;

class DeleteSujet extends Component
{
    public string $search ="";
    protected $queryString = [
        "search" =>['except'=>''],
    ];
    
   
    public function render()
    {
        return view('livewire.delete-sujet',[
            "sujets" => Sujet::where('ue','LIKE',"%{$this->search}%")->get(),
        ]);
    }
}
