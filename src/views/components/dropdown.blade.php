<div >
    <div class="relative min-w-min"
        x-data="{open:false}" @click.away="open = false" @close.stop="open = false" x-cloak>

    <div x-on:click="open = !open" {{ $attributes->merge(['class' => $style]) }}>
        <div class="">{{ $text }}</div>
    </div>
    
    <div x-show="open"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="transform opacity-0 scale-95"
    x-transition:enter-end="transform opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="transform opacity-100 scale-100"
    x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute top-0 left-0 z-50 origin-top ">
        <div class="min-w-full py-1 bg-white border rounded-md shadow-lg">
            {{ $slot }}
        </div>
    </div>

    </div>
    
</div>