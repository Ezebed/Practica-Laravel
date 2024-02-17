<figure class="bg-[#333] w-[500px] h-[230px] flex flex-col rounded-lg p-2 text-white" >
    <p class="w-full block font-bold mb-1 " >{{$title}}</p>
    <div class="flex">
        <img class="w-[30%] mr-2 border-2 border-[#5f5f5f] object-cover " src="{{ $imgUrl }}" alt="no hay nada">
        <div class="w-[70%] " >
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed dicta doloribus cum consequuntur ab quasi nam harum! Corporis a harum sunt quaerat cum eos exercitationem eveniet neque obcaecati? Fugit, facilis?
            </p>
            <button wire:click="$emit('chargeChat')" class="bg-[#5f5f5f] py-2 px-4 rounded font-bold mt-2 hover:bg-indigo-500 transition-colors" >Chat</button>
        </div>
    </div>
</figure>
