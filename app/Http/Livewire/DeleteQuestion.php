<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;

class DeleteQuestion extends Component
{

    public string $search ="";
    protected $queryString = [
        "search" =>['except'=>''],
    ];
    
   
    public function render()
    {
        return view('livewire.delete-question',[
            "questions" => Question::where('tilte','LIKE',"%{$this->search}%")->get(),
        ]);
    }



}
