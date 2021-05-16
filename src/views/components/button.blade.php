<div>
        <a {{ $attributes->merge(["class" => $style]) }}>
            {{ $slot }}
        </a>
</div>