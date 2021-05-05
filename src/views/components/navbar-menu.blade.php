
<div class="">
    <div {{ $attributes->merge(['class' => "flex items-center gap-2 justify-".$align]) }}>
        {{ $slot }}
    </div>
</div>