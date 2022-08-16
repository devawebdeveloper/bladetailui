@props([
    'align' => 'left',
    'trigger' => '',
    'triggerClass' => ''
    ])

<div>
    <div x-data="{open:false}" class="relative max-w-max" x-cloak>
        <div x-on:click="open = !open" class=" {{ $triggerClass }} p-2 cursor-pointer max-w-max">
            {{ $trigger ?? '' }}
        </div>

        <div x-show="open" x-on:click.away="open = false"
            x-transition:enter="transition ease-out duration-100 origin-top"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-100 origin-top"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"

            class="absolute {{ $align == 'left' ? 'left-0' : 'right-0' }} bg-white rounded overflow-hidden top-0 shadow-lg"
            style="min-width: 100px;z-index:99;">
            {{ $slot }}
        </div>
    </div>
</div>