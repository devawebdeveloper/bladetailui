<div>
    <div x-data="toastc()" x-init="close()" x-on:toast.window="gettoast($event.detail)" x-cloak>
        
        <div x-show="tt" 
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="opacity-0 transform scale-90 -translate-y-2"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90 -translate-y-2"
                class="fixed left-0 right-0 flex justify-center top-6">

            <div class="flex items-center gap-4 justify-{{ ($closable) ? 'between' : 'center' }} px-2 py-2 text-white bg-gray-700 rounded-md">
               <div class="">
                <p class="px-2" x-text="msg"></p>
               </div>
               <template x-if="closable">
                <div class="">
                    <span @click="tt = false" 
                        class="px-2 text-white bg-gray-600 rounded-lg cursor-pointer hover:bg-red-400">
                             &times;</span>
                </div>
               </template>
               
            </div>
            
        </div>
    </div>
</div>
<script>
    function toastc() {
        return {
            tt: false,
            closable: '{{ $closable }}',
            msg: '{{ $msg }}',
            
            gettoast (ev) {
                this.tt = true;
                this.msg = ev.msg;
                this.loading = ev.loading;
                this.close();
            },

            close() {

                var msec = (this.closable) ? 10000 : 2000;

                setTimeout(() => {
                    this.tt = false;
                }, msec);
            }

        }
    }

</script>