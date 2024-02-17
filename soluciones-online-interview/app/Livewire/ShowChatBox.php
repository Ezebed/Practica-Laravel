<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Message;
use App\Models\Chat;

class ShowChatBox extends Component
{
    public $chats = [];

    protected $listeners = ['chargeChat'=> 'hola'];

    public function loadChat($receiver_id)
    {
        dd('hola'.$receiver_id);
        $existChat = Chat::where('userA_id',auth()->user()->id)->where('userB_id',$receiver_id)
                            ->orWhere('userA_id',$receiver_id)->where('userB_id',auth()->user()->id)
                            ->get();

        if(count($existChat) == 0)
        {
            $newChat = Chat::create(['userA_id'=>auth()->user()->id,'userB_id'=>$receiver_id]);
            $newChat->save();
            $this->chats->push($newChat);
        }
        else if ( !in_array($existChat,$this->chats) )
        {
            $this->chats->push($existChat);
        }
    }

    public function hola()
    {
        dd('esto debe funcionar');
    }

    public function render()
    {
        return view('livewire.show-chat-box');
    }
}
