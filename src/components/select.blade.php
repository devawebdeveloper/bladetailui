@props([
    'label' => '',
    'options' => '',
    'help' => '',
    'placeholder' => ''
    ])

<div>
    <div class="my-1">

        <label for="">{{ $label ?? '' }}</label>

        <select {{ $attributes->merge([
            'class' => 'px-2 py-1 rounded border-t border-gray-200 shadow-sm w-full'
            ]) }}>

            <option class="pr-4 capitalize"  value="">{{ $placeholder == '' ? 'Select...' : $placeholder }} </option>

            @empty(!$options)
            @php
                $op = is_array($options) ? $options : explode(',', $options);
            @endphp
            @foreach ($op as $opt)

                @php
                    $opt = explode('|', $opt);
                @endphp

                <option class="pr-4 capitalize" value="{{ $opt[1] ?? $opt[0] }}"> {{ $opt[0] }} </option>

            @endforeach

            @endempty

        </select>

        @empty(!$help)
        <p class="text-sm text-gray-400 p-1">{{ $help ?? '' }}</p>
        @endempty


    </div>
</div>