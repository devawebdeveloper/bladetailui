@props([
    'active' => false,
    'activeClass' => '',
    'sm' => false,
    ])

@aware(['sm'])

<div class="">
    <a {{$attributes->class([
        ($activeClass == '') ? 'bg-gray-700 hover:bg-gray-700 text-white' : $activeClass => $active,
        'hover:bg-gray-200' => ! $active,
        'px-2 py-1 text-sm' => $sm,
        'px-4 py-2 text-base' => ! $sm,
        'transition duration-300 rounded'
        ]) }} >{{ $slot }}</a>
</div>