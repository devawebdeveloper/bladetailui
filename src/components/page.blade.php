@props([
    'title' => '',
    'dark' => false
    ])

<div>
    <div x-data="{open:false}" x-cloak >
        {{-- trigger --}}
        <div class="cursor-pointer" x-on:click="open = !open">
            {!! $trigger ?? '' !!}
        </div>

        {{-- page --}}
        <div x-show="open"
            x-transition:enter.duration.300ms
            x-transition:leave.duration.500ms
            @class([
                'fixed top-0 bottom-0 right-0 left-0 overflow-auto',
                'bg-white' => !$dark,
                'bg-gray-800 text-white' => $dark,
            ]) style="z-index:102" >

            {{-- page header --}}
            <div @class([
                'flex justify-between items-center px-4 md:px-6 overflow-auto',
                'fixed h-14 w-full',
                'bg-gray-100' => ! $dark,
                'bg-gray-900 text-white' => $dark,
                ])>

                {{-- header title area --}}
                <div class="flex justify-start items-center gap-6">

                    <div x-on:click="open = false"
                        @class([
                            'text-gray-500 hover:text-gray-100' => $dark,
                            'text-gray-500 hover:text-black' => ! $dark,
                            "cursor-pointer transition"
                            ])>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                          </svg>
                    </div>

                    <div>
                        {!! $title ?? '' !!}
                    </div>

                </div>

                {{-- header right area --}}
                <div>
                    {{ $right ?? '' }}
                </div>
            </div>

            {{-- content --}}
            <div class="p-4 md:px-8 fixed top-14 bottom-0 right-0 left-0 overflow-auto">
                {!! $slot !!}
            </div>

        </div>
    </div>
</div>