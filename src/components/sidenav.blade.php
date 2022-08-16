@props([
    'sm' => false,
    'dark' => false,
    ])
<div>
    <div {{ $attributes->class([
        'bg-gray-700 text-white' => $dark
        ]) }}>
        {{ $slot }}
    </div>
</div>