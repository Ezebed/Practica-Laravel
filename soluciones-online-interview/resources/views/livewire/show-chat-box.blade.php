<div class="fixed right-2 bottom-0" >
    @foreach($chats as $chat)
        <livewire:chat-box :currentChat="$chat" :wire:key="$chat->id" />
    @endforeach
</div>
