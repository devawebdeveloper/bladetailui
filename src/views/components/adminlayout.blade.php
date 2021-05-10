{{-- main div ------------------ --}}
<div x-data="MobileFirstLayout()" x-init="showHideInit()" class="fixed top-0 bottom-0 left-0 right-0" x-cloak>

    {{-- side bar navigation ---------------------------------------------------------------- --}}
    <div x-show="sidenav"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform -translate-x-full"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform -translate-x-full"
    
    class="fixed top-0 bottom-0 left-0 z-50 w-10/12 overflow-y-auto {{ $style['bg'] }} border-r shadow-lg sm:w-6/12 md:w-4/12 lg:w-1/5 xl:2/12">
        
        <div class="flex justify-end border-b border-{{ $color }}-800">
            <div  x-on:click="sidenav = false"
                class="px-3 py-1  text-2xl text-black {{ $style['closebutton'] }} lg:hidden">
            &times;</div>
        </div>
        
        <div class="">
            {{ $sidenav ?? '' }}
        </div>
    </div>

    {{-- content area ------------------------------------------------------------------------- --}}
    <div id="navbar" :class="sidenav === true ? 'lg:w-4/5' : 'lg:w-full' "
        class="fixed top-0 bottom-0 right-0 w-full overflow-y-auto transition-all duration-500 z-25 lg:w-4/5 xl:10/12" id="contentarea" >

        <div class="">

            {{-- content header---------------- --}}
        <div class="w-full px-4 py-3 border-b" >
            <div class="container mx-auto">
                
                <div class="flex justify-between">
                    {{-- header left --}}
                    <div class="text-xl cursor-pointer ">
                        <p class="flex items-center">
                            <i x-on:click="showHide()" class="material-icons">menu</i>
                            <span class="px-4 capitalize">{{ $sitetitle ?? '' }}</span>
                        </p>
                        
                    </div>
                    {{-- header right --}}
                    <div class="">
                        {{ $header_right ?? '' }}
                    </div>
                </div>
                
            </div>
            
        </div>

        <div class="container mx-auto overflow-y">
            {{ $slot }}    
        </div>

        </div>
        
        
    </div>
</div>

<script>
    function MobileFirstLayout() {
        return {
            sidenav: true,
            //sidenav css class
            sn_class: 'fixed top-0 bottom-0 z-50 left-0 bg-white border-r shadow-lg',
            //content css class
            c_class: 'fixed top-0 bottom-0 z-25 right-0 transition-all duration-500',
            //content area id
            contentarea: document.getElementById('contentarea'),
            //close button for sidenav
            closeButton: true,
            //init
            showHideInit() {
                var sw = screen.width;
                this.sidenav = screen.width <= 1024 ? false : true;

                
            },

            //show hide sidenav
            showHide() {
                this.sidenav = !this.sidenav;
            }
        }
    }

    //basic script
                var navbar = document.getElementById('navbar');
                var prevScrollpos = document.getElementById('navbar');

                console.log(prevScrollpos);
                window.onscroll = function() {
                    var currentScrollPos = window.pageYOffset;
                    
                    if (prevScrollpos > currentScrollPos) {
                        navbar.style.top = "0";
                    } else {
                        navbar.style.top = "-50px";
                    }
                    
                    prevScrollpos = currentScrollPos;
                }
</script>
