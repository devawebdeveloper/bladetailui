@props([
    'id' => 1,
    'dark' => false])
<div>
    <div x-data="{open: false, bs_id:'{{$id}}'}" x-init="console.log(bs_id)" x-on:bottomsheet.window="open = (bs_id === $event.detail.bs_id) ? false : open" x-cloak>
        {{-- trigger --}}
        <div x-on:click="open = true" class="cursor-pointer">
            {!! $trigger ?? 'Open' !!}
        </div>

        {{-- content --}}
        <div
            x-show = 'open'
            class="fixed  shadow bottom-0 top-0 left-0 right-0 flex justify-center items-end"
            style="z-index: 99">

            <div x-show='open' x-on:click.away="open = false"
                x-transition.origin.bottom.duration.200ms

                {{ $attributes->class([
                    'bg-white' => !$dark,
                    'bg-gray-800 text-white' => $dark,
                    'rounded-t-xl w-full sm:w-8/12 md:w-6/12 lg:w-5/12 p-2'
                    ]) }}

                style="max-height: 70%;overflow:auto;box-shadow: 0 0 25px -5px rgba(0,0,0,0.3)">

                {{ $slot }}
            </div>
        </div>
    </div>
</div>