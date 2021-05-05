<div>
    <div class="">
        <a {{ $attributes->merge(['class' => $style]) }}>
            {{ $slot }}
        </a>
    </div>
</div>