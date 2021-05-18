<div>
    <div x-data="{con:false}" class="" x-cloak>

        <div x-on:click="con = true" class="cursor-pointer">{{ $trigger }}</div>

        <div class="fixed top-0 left-0 right-0 z-50 flex justify-center py-12 m-6 justify-items-center"
            x-show.transition.opacity.50.duration.300ms="con"
            >

            <div class="w-full my-6 bg-gray-700 border border-gray-700 rounded-lg shadow sm:w-7/12 lg:w-3/12">

                <div class="p-6 text-base text-left text-white">
                    {{-- ask a question? --}}
                    {{ $text }}
                </div>

                <div class="flex justify-end gap-1 px-4 py-2 bg-gray-600 rounded-b-lg">
                    <button x-on:click="con = false" class="text-sm bs dark">Cancel</button>

                    {{-- okbutton slot --- place a wire:click button --}}
                   <span x-on:click="con = false" class="text-sm"> {{ $okbutton }} </span> 
                </div>

            </div>

        </div>

    </div>
</div>
