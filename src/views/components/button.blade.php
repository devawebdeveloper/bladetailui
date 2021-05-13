<div>

    @if($element == 'button')
        <button {{ $attributes->merge(["class" => $style]) }}>
            {{ $slot }}
        </button>
    @elseif ($element == 'a')
        <a {{ $attributes->merge(["class" => $style]) }}>
            {{ $slot }}
        </a>
    @endif
    
</div>