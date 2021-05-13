<div class="m-4" x-data="{open:true}" x-on:btuialert.window="">
    
    <div x-show.opacity="open" 
        class="flex items-center justify-between gap-4 px-2 py-2 border shadow-lg
         {{ btui($color)->bg(200)->border(400)->get() }}">
        <div class="pl-1 pr-3 ">
            <p class="font-bold {{ btui($color)->text(900)->get() }}">
            {{ $text }}</p></div>
        <div class="">
            @if($closable)
            <span x-on:click="open = false" 
                class="px-2 font-bold border cursor-pointer  
                   {{ btui($color)->border(500)->text(900)->get() }}
                   {{ btui($color)->bg(400)->hover()->get() }} ">&times</span>    
            @endif
        </div>
    </div>
</div>