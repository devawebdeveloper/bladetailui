<div>

    <div class="input-wrap input-wrap-{{ $type }}">       
        <div class="w-full">
            <input {{ $attributes->class(['input input-'.$size ])->merge(['type' => 'text']) }}>    
        </div>    
        @if($icon != false)
        <div class="input-icon input-{{ $size }}">
            <i class="{{ $icon }}"></i>
        </div>
        @endif
    </div>
    
</div>

{{-- changes history

    before versions --------

    1. basic code and style placed.

    //v2.0.3   ----------------------------------

    1. every tailwind css class wrap it with one class
    2. NPM run prod - Style collapsed bug fixed.
    3. Three sizes to four sizes - sm,md,lg,xl
    
    //v2.0.4   ----------------------------------
    
    1. $type renamed $styleType - success,warning,info etc..
    2. Default input type is text, but when placed `type` attr in the
        component, it will replace that value!
    3. Now i can use text,email,password in this one component!
    4. Padding Issue fixed!

    --}}
