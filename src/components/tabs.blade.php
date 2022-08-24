@props([
    'tabs' => [],
    'tabsAlignStart' => false,
    'tabsAlignCenter' => false,
    'tabsAlignEnd' => false
    ])

@empty(!$tabs)

<div x-data="{tab: '<?php echo $tabs[0] ?? '' ?>' }" x-cloak
    class="">

    <div {{ $attributes->class([
        'flex items-center mx-4 w-full',
        'justify-start' => $tabsAlignStart,
        'justify-center' => $tabsAlignCenter,
        'justify-end' => $tabsAlignEnd
        ]) }}>

        @foreach ($tabs as $item)
            <div class="capitalize cursor-pointer border-b-2 border-transparent"

                x-on:click="tab = '{{$item}}'">
                <div class="px-4 py-1">{!! str_replace('_', ' ', $item) !!}</div>
                <div :class="{ 'border-blue-300 border-b-4 transition -mb-1 duration-300 rounded-full mx-2 shadow-sm block' : tab === '{{ $item }}' }"  ></div>
            </div>
        @endforeach
    </div>

    <div class="">
        @foreach ($tabs as $item)
            @isset(${$item})
            <div x-show="tab === '{{ $item }}'"
                {{ ${$item}->attributes->class(['p-4 bg-white rounded-xl border-t border-blue-300']) }} >
                {!! ${$item} ?? '' !!}
            </div>
            @endisset
        @endforeach
    </div>
</div>

@endempty