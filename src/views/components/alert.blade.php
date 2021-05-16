<div class="m-4" x-data="{open:true}" x-on:btuialert.window="">
    
    <div x-show.transition="open" 
        class=" {{ config('btui.alert.outline') }}
         {{ btui($color)->padding($size, 'form')->bg(300)->border(500)->get() }}
         relative overflow-hidden ">

         <span class="{{ btui($color)->text(900)->bg()->get() }}
                text-opacity-50 absolute -left-2 -top-2 px-4 py-3 
                bg-opacity-10 rounded-full text-3xl">
                <i class="{{ $icon }}"></i>
            </span>

        <div class="{{ config('btui.alert.content') }}">
            <p class="{{ btui($color)->text(900)->get() }} px-8">
            {{ $text }}</p>
            
        </div>
        <div class="">
            @if($closable)
            <span x-on:click="open = false" 
                class=" {{ config('btui.alert.closebutton') }}  
                   {{ btui($color)->border(500)->text(900)->get() }}
                   {{ btui($color)->bg(400)->hover()->get() }} -mr-1 ">&times</span>    
            @endif
        </div>
    </div>
</div>