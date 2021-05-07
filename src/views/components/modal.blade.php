<div>
    <div x-data="showModal()" x-on:modal.window="ocModal($event.detail)" x-cloak>
        {{-- trigger --}}
        <div x-on:click="smOpen()" class="w-full">
            {{ $trigger }}
        </div>

        <div x-show.opacity="sm" class="fixed top-0 bottom-0 left-0 right-0 flex bg-white bg-opacity-40 {{ $align ?? "justify-center" }}">


            <div 
            x-show="sm"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90"

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
    <script>
        function showModal() {

            return {
                sm: false,
                mname: "{{ $modalname }}",
                smOpen() {
                    this.sm = true;
                },
                smClose() {
                    this.sm = false;
                },
                smToggle() {
                    this.sm = !this.sm;
                },
                ocModal(ev) {
                    //if(this.mname == ev.modalname) {
                        this.sm = ev.oc;
                    //}
                    //console.log(ev);
                }
            }
        }

    </script>
</div>
