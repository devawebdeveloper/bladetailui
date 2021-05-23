<div>
    <div x-data="btuiManageModal()" x-on:modal.window="ocModal($event.detail)" x-cloak>
        {{-- trigger --}}
        <div x-on:click="smOpen()" class="w-full">
            {{ $trigger }}
        </div>

        <div x-show.transition="sm" class="fixed z-50 top-0 bottom-0 left-0 right-0 flex bg-white bg-opacity-10 {{ $align ?? "justify-center" }}">


            <div x-show.transition="sm" @click.away="smClose()"
                class="grid grid-cols-1 w-full bg-white border-gray-200 shadow-lg md:w-{{ $width }}/12 overflow-y-auto ">
    
                <div class="w-full ">
                    <div class="flex justify-between px-4 py-2 bg-gray-100">
                        <div class="py-2 text-xl text-black">
                            {{ $title }}
                        </div>
                        <div class="">
                            <button x-on:click="smClose()" class="px-1 py-1 text-3xl text-gray-800 transition-all hover:text-4xl hover:text-red-500">&times;</button>
                        </div>

                    </div>
                    <div class="text-black">
                        {{ $slot }}
                    </div>

                </div>
            </div>

        </div>



    </div>
</div>
