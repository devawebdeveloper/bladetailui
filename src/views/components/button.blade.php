<div>

    @if($element == 'button')
        <button {{ $attributes->merge(["class" => $basic_style]) }}>
            {{ $slot }}
        </button>
    @elseif ($element == 'a')
        <a {{ $attributes->merge(["class" => $basic_style]) }}>
            {{ $slot }}
        </a>
    @endif
    
</div>