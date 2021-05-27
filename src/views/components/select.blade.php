<div>
    <select {{ $attributes->merge(['class' => 'select select-'.$type.' select-'.$size]) }}>
        <option value="" class="">{{ $placeholder }}</option>
        @foreach ($options as $key => $value)
            <option value="{{ $value }}" class="">{{ $key }}</option>
        @endforeach
    </select>
</div>