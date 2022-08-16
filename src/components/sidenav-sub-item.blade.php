@props([
    'label' => '',
    'sm' => false,
    'active' => false,
    'activeClass' => '',
    'dark' => false,
    ])

@aware(['sm', 'dark'])

@php
    $dclass = $dark ? 'bg-gray-800' : 'bg-gray-200';
@endphp

<div class="">
    <div class="">
        <a {{ $attributes->class([
            'px-4 py-1 text-sm' => $sm,
            'px-4 py-2 text-base' => !$sm,
            'hover:bg-gray-900 border-gray-600' => $dark,
            ($activeClass == '') ? $dclass : $activeClass => $active,
            'block hover:bg-gray-300 border-l border-gray-200 cursor-pointer
             transition duration-300 capitalize']) }} >

            {{ $label == '' ? $slot : $label }} </a>
    </div>
</div>