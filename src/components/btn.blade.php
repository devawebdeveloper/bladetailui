@props([
    'sm' => false,
    'md' => false,
    'xl' => false,
    'link' => false,
    'gray' => false,
    'darkGray' => false,
    ])

<div class="">
        <a {{ $attributes->class([
            'px-6 py-2' => $md,
            'px-2 py-1 text-sm' => $sm,
            'px-10 py-3' => $xl,
            'text-blue-500 hover:text-blue-700' => $link,
            'bg-gray-200 hover:bg-gray-300' => $gray,
            'bg-gray-600 hover:bg-gray-800 text-white' => $darkGray,
            'transition transition-all duration-300 cursor-pointer rounded']) }}>
            {{$slot}}
        </a>
</div>