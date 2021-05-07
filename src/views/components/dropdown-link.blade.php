<div>
    <div {{ $attributes->merge(['class' => 'px-3 py-1 cursor-pointer hover:bg-gray-100 trans-basic capitalize']) }}>
        {{ $slot }}
    </div>
</div>