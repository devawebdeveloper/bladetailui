<div>
        <button {{ $attributes->class(['bn bn-'.$size.' bn-'.$color])->merge(['type' => 'button']) }}>
            {{ $slot }}
        </button>

        
</div>

{{-- changes history 
    
    //v2.0.4 -------------------------------

    1. <a> to <buton>
    2. set default type = button

    
    --}}
