<?php

namespace App\Livewire;

use Livewire\Component;

class ChatBox extends Component
{
    public $chatBoxOpen = true;

    public $isMinimize = false;


    public function handleMinimize()
    {
        $this->isMinimize = !$this->isMinimize;
        
    }

    public function closeChatBox(){
        $this->chatBoxOpen = false;
    }

    public function render()
    {
        return view('livewire.chat-box');
    }
}
