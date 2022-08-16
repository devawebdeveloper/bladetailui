@props([
    'sm' => false,
    'md' => false,
    'lg' => false,
    'xl' => false,
    'white' => false,
    'dark' => false,
    'bottom' => false,
    ])

<div {{ $attributes->class([
    'p-2 text-sm' => $sm,
    'p-3' => $md,
    'px-4 py-5' => $lg,
    'px-6 py-8 text-lg' => $xl,
    'bg-white' => $white,
    'bg-white' => !$dark,
    'bg-gray-800 text-white' => $dark,
    'fixed bottom-0 w-full' => $bottom,
    'flex items-center'
    ]) }} {!! $bottom ? 'style="box-shadow: 0 0 5px rgba(0,0,0,0.3);z-index:88"' : '' !!} >
    <div class="container mx-auto">
        <div class="flex justify-between items-center">

            @isset($title)
            <div>
                <a {{ $title->attributes }}>
                    {!! $title ?? '' !!}
                </a>
            </div>
            @endisset

            @isset($center)
            <div {{ $center->attributes }} >
                {{ $center ?? '' }}
            </div>
            @endisset

            @isset($right)
            <div {{ $right->attributes }} >
                {{ $right ?? '' }}
            </div>
            @endisset

        </div>
    </div>
</div>