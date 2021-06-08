<div>
    <div x-data="{con:false}" class="" x-cloak>

        <div x-on:click="con = true" class="cursor-pointer">{{ $trigger }}</div>

        <div class="confirm"
            x-show.transition="con">

            <div class="confirm-inner confirm-dark">

                <div class="confirm-content">
                    {{-- ask a question? --}}
                    {{ $text }}
                </div>

                <div class="confirm-bottom">
                    <x-btui-button x-on:click="con = false" color="gray" >Cancel</x-btui-button>

                    {{-- okbutton slot --- place a wire:click button --}}
                   <span x-on:click="con = false" class="text-sm"> {{ $okbutton }} </span> 
                </div>

            </div>

        </div>

        

    </div>
</div>
