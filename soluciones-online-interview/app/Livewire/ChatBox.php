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

    public $messages;
    
    public $messageBody;

    public $chatData;

    public function mount($currentChat)
    {
        $this->chatData = $currentChat;
        $this->receiver = User::find( $currentChat->userA_id == Auth()->user()->id ?
                                      $currentChat->userB_id : $currentChat->userA_id );
        $this->loadChat();
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
        $this->messages = Message::where('chat_id',$this->chatData->id)->get();
    }

    public function sendMessage()
    {
        if($this->messageBody == null)
        {
            return null;
        }

        // dd($this->chatData->id);

        $newMessage = Message::create([
            'chat_id' => $this->chatData->id,
            'sender_id' => Auth()->user()->id,
            'body' => $this->messageBody,
        ]);

        $this->reset('messageBody');
        $this->loadChat();
    }

    public function render()
    {
        return view('livewire.chat-box');
    }
}
