@props([
    'sm' => false,
    'start' => false,
    'center' => false,
    'end' => false
    ])
<div>
    <div {{ $attributes->class([
        'justify-start' => $start,
        'justify-center' => $center,
        'justify-end' => $end,
        'flex items-center gap-2'
        ]) }} >
        {{ $slot }}
    </div>
</div>