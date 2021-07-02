<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;

class UpdateQuestion extends Component
{
    public $question ="";

    public function render()
    {
        return view('livewire.update-question',[
            "questions" => Question::where('tilte','LIKE',"%{$this->question}%")->get(),
        ]);
    
    }
}
