<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class MessageHelp extends Component
{
    public function render()
    {
        
        return view('livewire.message-help',
    [
        "messages" => Message::where('destinateur',1)->paginate(10),
    ]);
    }
}
