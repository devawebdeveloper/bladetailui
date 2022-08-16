@props([
    'label' => '',
    'sm' => false,
    'active' => false,
    'activeClass' => '',
    'open' => false,
    'dark' => false
    ])

@aware(['sm','dark'])

@php
    $open = $active;
    $dclass = $dark ? 'bg-gray-800' : 'bg-gray-200';
@endphp

<div x-data="{open: '<?php echo $open ?>' }" x-cloak
    @class([($activeClass == '') ? $dclass : $activeClass => $active,])
    >

    <div class="" x-on:click="open = !open">
        <a {{ $attributes->class([
            'px-2 py-1 text-sm' => $sm,
            'px-2 py-2 text-base' => !$sm,
            'hover:bg-gray-900' => $dark,
            'hover:bg-gray-300' => ! $dark,
            'block cursor-pointer transition duration-300 capitalize']) }}>

        <div class="flex justify-between items-center">

            <div>{{ $label }}</div>

            @if (!$attributes->has('href'))
            <div>
                <template x-if="open">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 pt-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                </template>
                <template x-if="!open">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 pt-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                </template>
            </div>
            @endif

            </div>

            </a>


    </div>

    <div x-show="open">
        {{ $slot }}
    </div>


</div>