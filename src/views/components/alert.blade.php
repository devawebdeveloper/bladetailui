<div class="m-4" x-data="{open:true}" x-on:btuialert.window="">
    
    <div x-show.opacity="open" class="flex items-center justify-between px-3 py-2  border rounded {{ $types[$type]['outline'] }} ">
        <div class="{{ $types[$type]['text'] }} ">
            <p class="">
            {{ $text }}</p></div>
        <div class="">
            @if($closable)
            <span x-on:click="open = false" 
                class="px-2 text-xl font-bold  cursor-pointer rounded-lg hover:text-red-700 trans-basic {{ $types[$type]['closable'] }} ">&times</span>    
            @endif
        </div>
    </div>
</div>