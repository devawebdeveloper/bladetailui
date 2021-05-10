<div>

    @php
        $menus = json_encode($menu);
    @endphp
    
    <div x-data="manageMenus('{{ $menus }}')" x-init="init()" x-cloak
        class="w-full min-h-full overflow-y-auto {{ $style['bg'] }} divide-y ">
        @foreach ($menu as $m => $mv)
            <div class="">
                
                <div @click="openMenu('{{ $m }}')"
                    class="relative transition-all duration-300 px-3 py-2 {{ $style['maintext'] }} capitalize cursor-pointer">
                    {{ $m }}

                    <div class="absolute px-2 right-2 top-2">
                        <template x-if="menu.{{ $m }}.open">
                            <i class="fa fa-angle-up"></i>
                        </template>
                        <template x-if="!menu.{{ $m }}.open">
                            <i class="fa fa-angle-down "></i>
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
                
            },

            openMenu(m) {
               this.menu[m]['open'] = !this.menu[m].open;
            }
        }
    }
</script>