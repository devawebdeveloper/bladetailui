@props([
    'contentPadding' => true,
    'dark' => false,
    ])

<div class="">
    <div x-data="{open:false}" x-cloak>
        {{-- trigger --}}

        <div class="cursor-pointer" x-on:click="open = !open">
            {!! $trigger ?? '' !!}
        </div>

        {{-- modal --}}

        <div x-show="open"
            x-transition:enter.duration.300ms
            x-transition:leave.duration.500ms
            class="fixed left-0 right-0 top-0 bottom-0 overflow-auto py-10"
            style="z-index: 120">

            <div @class([
                'bg-gray-800 text-white' => $dark,
                'bg-white border-blue-100' => ! $dark,
                'border-t rounded-xl shadow-xl w-full sm:w-8/12 md:w-6/12 lg:w-5/12 overflow-hidden my-4 mx-auto',
                ]) >

                <div @class([
                    'flex justify-between items-center px-2 py-2',
                    'border-b border-gray-200' => !$dark,
                    'border-b border-gray-700' => $dark
                    ]) >

                    <h3 class="font-semibold text-lg px-2">{!! $title ?? 'Title here!' !!}</h3>

                    <p x-on:click="open = false"
                        @class([
                            'text-gray-400 hover:text-gray-100 hover:bg-gray-600' => $dark,
                            'text-gray-600 hover:text-gray-800 hover:bg-gray-100' => ! $dark,
                            'text-2xl rounded-lg w-7 cursor-pointer h-7
                            flex justify-center items-center transition duration-500'
                        ])>

                        &times;</p>
                </div>

                <div @class(['p-4' => $contentPadding]) >
                    {!! $slot !!}
                </div>

            </div>
        </div>
    </div>
</div>