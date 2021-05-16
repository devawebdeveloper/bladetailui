<div>
    <div class="flex justify-start mx-1 my-2 min-w-min">
        <div class="w-full">
            <input type="text" {{ $attributes->merge(['class' => $style]) }} class="">
        </div>
        @if($icon != false)
        <div class="{{ btui($color)->bg(100)->text(700)->border(200)->get() }} 
            {{ $iconstyle }} rounded-full border -ml-1 flex justify-center items-center">
            <i class="{{ $icon }}"></i>
        </div>
        @endif
    </div>
    
</div>