<?php

namespace App\Livewire;

use Livewire\Component;

class BlogEntry extends Component
{
    public $blogTitle;

    public $imgUrl;

    public $userChat = 5;
    
    public function emitChat()
    {
        $this->dispatch('chargeChat', receiver_id:$this->userChat);
    }

    public function render()
    {
        return view('livewire.blog-entry');
    }
}
