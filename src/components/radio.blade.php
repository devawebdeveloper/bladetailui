@props([
    'wrapper' => '',
    'label' => '',
    'sm' => false
    ])
<div>
    <div class="{{ $wrapper ?? '' }} cursor-pointer flex justify-center items-center gap-2 bg-gray-50 px-2 rounded py-1 my-1">
        <input type="radio" {{ $attributes->merge([
            'class' => 'px-1 py-1 rounded-rull outline-none'
            ]) }}>
        <label @class(['capitalize cursor-pointer', 'text-sm' => $sm])
         for="{{ $attributes->get('id') ?? '' }}">{{ $label ?? '' }}</label> <br>
    </div>
</div>