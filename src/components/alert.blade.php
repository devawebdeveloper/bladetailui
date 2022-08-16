@props([
    'closable' => false,
    'info' => false,
    'success' => false,
    'warning' => false,
    'danger' => false
    ])

<div>
    <div x-data="{open:true}" class="relative" x-cloak>
        <div x-show="open"

        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-80"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-80"


        {{ $attributes->class([
            'bg-gray-200 border-gray-400' => $info,
            'bg-green-100 border-green-400' => $success,
            'bg-yellow-100 border-yellow-400' => $warning,
            'bg-red-100 border-red-400' => $danger,
            ' rounded-r shadow-sm rounded-bl-xl border-l-4 mx-2 my-1'
            ]) }}>

        <div class="flex justify-left items-center gap-2">
            <div>
                <p class="px-4 py-3 text-sm font-semibold">
                    {{ $slot }}
                </p>
            </div>
            @if ($closable)
            <div x-on:click="open = false" class="bg-gray-50 absolute flex justify-center items-center rounded-xl w-6 h-6 shadow -right-1 -top-2 z-50 hover:shadow-sm hover:bg-red-50 cursor-pointer">
                <p class=" text-xl font-semibold">&times;</p>
            </div>
            @endif
        </div>
        </div>
    </div>
</div>