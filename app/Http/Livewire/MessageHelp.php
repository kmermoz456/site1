<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class MessageHelp extends Component
{
    public function render()
    {
       
     $Message =Message::where('destinateur',1)->paginate(10);
     
      
        return view('livewire.message-help',
    [
        "messages" => $Message,
        
    ]);
    }
}
