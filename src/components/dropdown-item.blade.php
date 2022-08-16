@props(['dark' => false])

<div>
    <div class="block">
        <a {{ $attributes->class([
            'bg-gray-800 hover:bg-gray-600 text-white' => $dark,
            'bg-white hover:bg-gray-100' => ! $dark,
            'block cursor-pointer px-2 py-1
             transition-all duration-300'
            ]) }}>
            {{ $slot }}
        </a>
    </div>
</div>