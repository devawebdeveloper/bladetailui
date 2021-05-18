<div class="w-full">
    @if($count == 0)
        <x-btui-alert text="No tabs! Add some!" type="warning" closable="true" />
    @else
    <div x-data="manageTabs()" x-init="init()" x-cloak class="{{ $tstyle['bg'] }} my-4">
        <div class=" {{ $tstyle['tabs'] }}">
            @foreach ($tabs as $tab )
                <div @click="selectTab('{{ $tab }}')" class=" {{ $tstyle['tab'] }} "
                    :class="(tabs['{{ $tab }}'] == true) ? ' {{ $tstyle['tab-selected'] }} ' : ' border-transparent {{ $tstyle['tab-hover'] }} ' ">
                    {{ $tab }}
                </div>
            @endforeach
        </div>
        <div class="{{ ($contentClass == '') ? $tstyle['content'] : $contentClass }}">
            @foreach ($tabs as $tab)
            <div x-show.transition.in.duration.300ms.origin.top="tabs.{{ $tab }}" class="">
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