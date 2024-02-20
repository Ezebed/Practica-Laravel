
<div>
    @if($chatBoxOpen)
    <!-- chatBox -->
    <div class="w-[300px] h-fit font-bold bg-white border-2 border-stone-800 rounded-t-lg flex flex-col space-beetween transition-[height] ease-in-out">
        <!-- ChatBoxHeader -->
        <div class="w-full h-14 border-b-2 p-2 flex justify-between items-center">
            <span class="" >{{$receiver->name}}</span>
            <div class="flex space-x-2" >
                <button class="hover:bg-stone-400 rounded-sm size-7 grid place-content-center" wire:click="handleMinimize" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8"/>
                    </svg>
                </button>
                <button class="hover:bg-stone-400 rounded-sm size-7 grid place-content-center" wire:click="closeChatBox" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                    </svg>
                </button>  
            </div>
        </div>
        @if(!$isMinimize)
        <!-- ChatBody -->
        <div class="w-full h-[400px] p-2 flex flex-col space-y-2 bg-stone-200 overflow-y-auto scroll">
            @forelse($messages as $message)
            <div class="flex space-x-4 w-full {{ Auth()->user()->id == $message->sender_id ? ' flex-row-reverse space-x-reverse':'' }}  ">
                <div class="size-[30px] rounded-full bg-stone-600 "></div>
                <p class=" w-[70%] min-h-[60px] p-2 text-wrap break-words text-white {{Auth()->user()->id == $message->sender_id ? ' bg-indigo-400':'bg-stone-500'}} rounded-lg">{{$message->body}}</p>
            </div>
            @empty
            <div class="w-full h-full grid place-content-center">
                <p>Escribe un mensaje para chatear</p>
            </div>
            @endforelse
        </div>
        <!-- ChatEntry -->
        <div class="w-full h-24 border-t-2 ">
            <form wire:submit.prevent="sendMessage" class="grid grid-cols-12 gap-1 w-full h-full px-2 content-center">
                @csrf
                <textarea wire:model="messageBody" name="msg" class="h-14 w-[90%] p-1 overflow-hidden bg-stone-200 outline-none col-span-10 resize-none " ></textarea>
                <button class="col-span-2" type="submit" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                        <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1"/>
                    </svg>
                </button>
            </form>
        </div>
        @endif
    </div>
    @endif
</div>