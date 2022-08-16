@props([
    'wrapper' => '',
    'help' => '',
    'label' => '',
    'sm' => false,
    'md' => false,
    'xl' => false,
    'error' => false,
    'warning' => false,
    'labelClass' => ''
    ])
<div>
    <div class="{{ $wrapper ?? '' }} my-1">

        @empty(!$label)

        <label @class(['text-sm' => $sm, $labelClass])
            for="{{ $attributes->get('id') ?? '' }}">
            {{ $label ?? '' }}</label>

            <br>
        @endempty

        <textarea {{ $attributes->class([
                'px-2 py-1 text-sm' => $sm,
                'px-3 py-2' => $md,
                'px-4 py-3 text-lg' => $xl,
                'border-t-2 border-red-300' => $error,
                'border-t-2 border-yellow-300' => $warning,
                'rounded shadow-sm w-full outline-none border-0 focus:outline-none focus-within:border-transparent '
            ])->merge(['type' => 'text', 'rows' => 3]) }}></textarea>

        @empty(!$help)
            <p class="text-sm text-gray-400 px-1 py-1">{{ $help ?? '' }}</p>
        @endempty

    </div>
</div>