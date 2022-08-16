@props([
    'msg' => '',
    'dark' => false,
    'position' => 'top-right'
    ])

<div x-data="{open:false,msg: '', i: null}"
    x-on:toast.window="($event) => {

        msg = $event.detail.msg;
        open = true;

        i = setTimeout(() => {
            open = false;
        }, 10000);

        }" x-cloak>

    <div x-show="open"
        x-transition:enter.duration.300ms
        x-transition:leave.origin.top.duration.500ms
        @class([
        "fixed rounded-lg shadow-xl p-3",
        'bg-white' => !$dark,
        'bg-gray-800 text-white' => $dark,
        'right-10 top-10' => $position === 'top-right',
        'top-10 left-10' => $position === 'top-left',
        'bottom-10 left-10' => $position === 'bottom-left',
        'bottom-10 right-10' => $position === 'bottom-right',
        ])
        style="min-width: 220px;">

        <div class="flex justify-between items-start gap-4">
            {{-- content --}}
            <div class="px-2 " x-html="msg">
                {!! $msg ?? 'Content is king! always!' !!}
            </div>
            {{-- close button --}}
            <div x-on:click="open = false; clearTimeout(i)"
                @class([
                "text-xl h-6 w-6
                flex justify-center items-center
                cursor-pointer transition rounded-lg",
                'bg-gray-50 hover:bg-gray-100' => !$dark,
                'bg-gray-900 hover:bg-gray-700' => $dark
                ])>
                &times;</div>
        </div>
    </div>
</div>