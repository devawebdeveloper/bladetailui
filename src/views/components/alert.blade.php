<div class="m-4" x-data="{open:true}" x-on:btuialert.window="">
    
    <div x-show.opacity="open" class="flex items-center gap-4 justify-between px-2 py-2  border rounded {{ $types[$type]['outline'] }} ">
        <div class="{{ $types[$type]['text'] }} pl-1 pr-3">
            <p class="">
            {{ $text }}</p></div>
        <div class="">
            @if($closable)
            <span x-on:click="open = false" 
                class="px-2 font-bold  cursor-pointer rounded hover:bg-red-700 hover:text-white transition-all duration-300 {{ $types[$type]['closable'] }} ">&times</span>    
            @endif
        </div>
    </div>
</div>