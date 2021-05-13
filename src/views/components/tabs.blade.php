<div class="w-full">
    @if($count == 0)
        <div class="p-4 text-center bg-white border border-red-400 rounded">
            Tabs or Empty!
        </div>
    @else
    <div x-data="manageTabs()" x-init="init()" x-cloak class="{{ $align == 'left' ? 'flex' : '' }}">
        <div class=" {{ $align == 'left' ? ' w-2/12 ' : 'flex items-center justify-start' }}">
            @foreach ($tabs as $tab )
                <div @click="selectTab('{{ $tab }}')" class="px-4 py-1 capitalize transition-all duration-300 {{ $align == 'left' ? '' : ' rounded-t' }} cursor-pointer "
                    :class="(tabs['{{ $tab }}'] == true) ? ' {{ btui($theme)->bg(600)->text()->get() }} ' : ' border-transparent {{ btui($theme)->bg(200)->hover()->get() }} ' ">
                    {{ $tab }}
                </div>
            @endforeach
        </div>
        <div class="bg-white {{ btui($theme)->border()->get() }} shadow {{ $align == 'left' ? 'w-10/12 border-l-4' : 'w-full border-t-4' }}">
            @foreach ($tabs as $tab)
            <div x-show="tabs.{{ $tab }}" class="px-4 py-2">
                {{ ${$tab} ?? '' }}
            </div>
            @endforeach
        </div>
    </div>
    @endif    
    
</div>
<script>
    function manageTabs() {
        return {
            tabs: '<?php echo json_encode($tabshow) ?>',
            tabshow: [],
            init() {
                this.tabs = JSON.parse(this.tabs);
                var gettab = new URLSearchParams(window.location.search);
                if (gettab.has('tab')) {
                    this.selectTab( gettab.get('tab'));
                }
                
            },
            selectTab(tab) {
                Object.keys(this.tabs).forEach( el => {
                    this.tabs[el] = (tab == el) ? true : false;
                });
                window.history.pushState('','','?tab='+tab);
            }
        }
    }
</script>