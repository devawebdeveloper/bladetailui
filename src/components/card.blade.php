@props(['dark' => false])
<div class="">
    <div {{ $attributes->class([
            'p-2 rounded-xl divide-y',
            'bg-white divide-gray-100 text-black' => !$dark,
            'bg-gray-900 divide-gray-800 text-white' => $dark,
            ]) }}

            style="box-shadow: 0 5px 7px -5px rgba(0,0,0,0.2)">

        {{ $slot }}
        </div>
</div>