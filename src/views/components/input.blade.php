<div>
    <div class="flex items-center justify-start m-1 min-w-min">
        <div class="w-full">
            <input type="text" {{ $attributes->merge(['class' => $style]) }} class="">
        </div>
        @if($icon != false)
        <div class="{{ btui($color)->bg(100)->text(700)->border(200)->get() }} 
            {{ $iconstyle }} rounded-full border flex justify-center items-center z-20">
            <i class="{{ $icon }}"></i>
        </div>
        @endif
    </div>
    
</div>