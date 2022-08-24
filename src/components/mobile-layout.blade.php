@props(['dark' => false, 'shadow' => 'sm'])
<div>
    <div @class(["fixed top-0 bottom-0 left-0 right-0", "bg-gray-100" => !$dark, "bg-gray-800 text-white" => $dark])>

        {{-- header --}}
        @isset($header)
        <div @class([
                "fixed left-0 right-0 top-0 h-14",
                'flex items-center',
                'bg-white text-black' => !$dark,
                'bg-gray-900 text-white' => $dark ])
                style="box-shadow: 0 5px 8px -7px rgba(0,0,0,0.2); z-index:50;">
            <div class="container mx-auto">
                {!! $header !!}
            </div>
        </div>
        @endisset

        {{-- content --}}
        <div {{ $attributes->class([
                "fixed left-0 right-0 overflow-y-auto py-2",
                'bottom-14' => isset($footer),
                'bottom-0'  => !isset($footer),
                'top-14' => isset($header),
                'top-0' => !isset($header)
                ]) }}
                style="z-index:40;">
            <div class="container mx-auto">
                {{ $slot }}
            </div>
        </div>

        {{-- footer --}}
        @isset($footer)
        <div @class([
                "fixed left-0 right-0 bottom-0 h-14",
                'flex items-center',
                'bg-white text-black' => !$dark,
                'bg-gray-900 text-white' => $dark ])
                style="box-shadow: 5px 0 15px -5px rgba(0,0,0,0.4):z-index:50;" >
            <div class="container mx-auto">
                {!! $footer !!}
            </div>
        </div>
        @endisset

    </div>
</div>