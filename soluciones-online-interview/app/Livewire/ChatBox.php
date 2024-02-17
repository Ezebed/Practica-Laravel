<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Message;
use App\Models\Chat;

class ChatBox extends Component
{
    public $chatBoxOpen = true;

    public $isMinimize = false;

    public $receiver;

    public function mount($currentChat)
    {
        $this->receiver = User::find(5);
        dd($currentChat);
    }

    public function handleMinimize()
    {
        $this->isMinimize = !$this->isMinimize;
        
    }

    public function closeChatBox(){
        $this->chatBoxOpen = false;
    }

    public function loadChat()
    {
        $existChat = Chat::where('userA_id',auth()->user()->id)->where('userB_id',$this->receiverId)
                            ->orWhere('userA_id',$this->receiverId)->where('userB_id',auth()->user()->id)
                            ->get();

        if(count($existChat) == 0)
        {
            $newChat = Chat::create(['userA_id'=>auth()->user()->id,'userB_id'=>$this->receiverId]);
            $newChat->save();
        }
    }

    public function render()
    {
        return view('livewire.chat-box');
    }
}
