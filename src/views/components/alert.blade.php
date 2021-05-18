<div class="m-1" x-data="{open:true}" x-on:btuialert.window="">
    
    <div x-show.transition="open" 
        class=" {{ $css['outline'] }}
         {{ btui($color)->padding($size, 'form')->bg(300)->border(500)->get() }}
         ">
        <div class="flex items-center justify-start gap-2">

            <span class="{{ btui($color)->text(900)->get() }} text-opacity-75 ">
                <i class="{{ $icon }}"></i>
            </span>

            <div class="{{ $css['content'] }}">
                <p class="{{ btui($color)->text(900)->get() }}">
                {{ $text }}</p>
            </div>

        </div>
         
        <div class="">
            @if($closable)
            <span x-on:click="open = false" 
                class=" {{ $css['closebutton'] }}  
                   {{ btui($color)->border(500)->text(900)->get() }}
                   {{ btui($color)->bg(400)->hover()->get() }} -mr-1 ">&times</span>    
            @endif
        </div>
    </div>
</div>