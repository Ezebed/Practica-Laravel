<div class="fixed right-2 bottom-0" >
    @foreach($chats as $chat)
        <livewire:chat-box :currentChat="$chat[0]" :wire:key="$chat[0]->id" />
    @endforeach
</div>
