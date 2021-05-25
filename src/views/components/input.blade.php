<div>

    <div class="flex items-center justify-between p-1 {{ $type == 'default' ? "bg-transparent" : 'bg-'.$color.'-300'  }} rounded">       
        <div class="w-full ">
            <input type="text" {{ $attributes->merge(['class' => $style]) }}>    
        </div>    
        @if($icon != false)
        <div class="px-2 text-{{ $color }}-700">
            <i class="{{ $icon }}"></i>
        </div>
        @endif
    </div>
    
</div>