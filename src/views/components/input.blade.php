<div>

    <div class="input-wrap input-wrap-{{ $type }}">       
        <div class="w-full">
            <input type="text" {{ $attributes->merge(['class' => 'input input-'.$size ]) }}>    
        </div>    
        @if($icon != false)
        <div class="input-icon input-{{ $size }}">
            <i class="{{ $icon }}"></i>
        </div>
        @endif
    </div>
    
</div>