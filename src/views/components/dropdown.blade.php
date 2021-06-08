<div >
    <div class="relative"
        x-data="{open:false}" @click.away="open = false" @close.stop="open = false" x-cloak>

    <div x-on:click="open = !open" {{ $attributes->merge(['class' =>'dropdown dropdown-'.$size ]) }}>
        <div class="">{{ $text }}</div>
        @if($icon)
        <div class="text-gray-500">
            <template x-if="!open">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                </div>
            </template>
            <template x-if="open">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                      </svg>
                </div>
            </template>
        </div>
        @endif
    </div>
    
    <div x-show.transition.origin.top="open"
        class="dropdown-linkbox dropdown-{{ $align }}">
        <div class="bg-white dropdown-links dropdown-links-{{ $size }}">
            {{ $slot }}
        </div>
    </div>

    </div>
    
</div>

{{-- version histroy
    
    v2.0.4 ---------------------------

    1. css classes replaced.
    2. sizes changed.
    3. remove the dropdown-link component need.
    
    --}}
