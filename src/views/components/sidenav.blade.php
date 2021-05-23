<div>

    @php
        $menus = json_encode($menu);
    @endphp
    
    <div x-data="btuiManageSidenav('{{ $menus }}')" x-init="init()" x-cloak
        class="w-full min-h-full overflow-y-auto {{ $style['bg'] }}">
        @foreach ($menu as $m => $mv)
            <div class="">
               @if($mv['count'] == 1 || $mv['count'] == null)
               <div @click="localStorage.removeItem('sidenav-menu')"
                    class="">
                    {{ ${$m} ?? '' }}
               </div>
               @else
                <div 
                    class="relative capitalize transition-all duration-300 cursor-pointer">
                    <div @click="openMenu('{{ $m }}')" 
                        class="px-4 py-2 shadow {{ $style['maintext'] }}">
                        {{ $m }}

                        <div class="absolute px-2 right-2 top-2">
                            <template x-if="menu.{{ $m }}.open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 pt-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                </svg>
                                
                            </template>
                            <template x-if="!menu.{{ $m }}.open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 pt-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                  </svg>
                            </template>
                        </div>
                    </div>

                    

                    <div x-show="menu.{{ $m }}.open">
                        @for($i = 1; $i <= $mv['count']; $i++)
                            <div class="">
                                {{ ${$m.$i} ?? '' }}
                            </div>
                        @endfor
                    </div>
                </div>

                
                @endif
                
            </div>
        @endforeach
    </div>
</div>
<script>
    function manageMenus(menus) {
        
        return {
            menu: menus,
            
            init() {
                //console.log(this.menu)
                this.menu = JSON.parse(this.menu);
                //console.log(localStorage.getItem('sidenav-menu'))
                if (localStorage.getItem('sidenav-menu') != null ) {
                    Object.keys(this.menu).forEach( key => {
                        if (localStorage.getItem('sidenav-menu') == key) {
                            this.openMenu(localStorage.getItem('sidenav-menu'))
                        }
                    });
                    
                }
                
            },

            openMenu(m) {
               this.menu[m]['open'] = !this.menu[m].open;
               localStorage.setItem('sidenav-menu', m);
            }
        }
    }
</script>