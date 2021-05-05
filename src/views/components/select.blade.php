<div>
    <select {{ $attributes->merge(['class' => $style." capitalize"]) }}>
        <option value="" class="">{{ $placeholder }}</option>
        @foreach ($options as $key => $value)
            <option value="{{ $value }}" class="">{{ $key }}</option>
        @endforeach
    </select>
</div>