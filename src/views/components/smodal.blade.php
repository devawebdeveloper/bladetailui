<div>
    <div x-data="{smodal:false}" x-on:smodal.window="smodal = $event.detail.ocs" class="" x-cloak>

        <div x-on:click="smodal = true" class="">{{ $trigger }}</div>

        <div class="fixed top-0 left-0 right-0 z-50 items-center mx-auto my-12 origin-top bg-gray-400 justify-items-center sm:w-7/12 lg:w-4/12"
            x-show="smodal" @click.away="smodal = false"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90">

            <div class="z-50 w-full bg-white border border-gray-100 shadow-lg">

                <div class="flex justify-between p-1 border-b bg-gray-50 ">
                    <div class="pt-0 pl-2 text-lg text-black">
                        {{ $title ?? "" }}
                    </div>
                    <div class="">
                        <button x-on:click="smodal = false" 
                            class="px-2 text-lg font-bold text-gray-800 transition-all duration-300 rounded-lg hover:bg-gray-100 hover:text-red-500">
                            &times;</button>
                    </div>
                    
                </div>

                <div class="text-left text-black ">
                   {{ $slot }}
                </div>

                @isset($footerleft,$footerright)
                <div class="px-4 py-2 border-t">
                    <div class="flex justify-between">
                        <div class="">{{ $footerleft  }}</div>
                        <div class="">{{ $footerright }}</div>
                    </div>
                </div>
                @endisset
                

            </div>

        </div>

    </div>
</div>
