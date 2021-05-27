<div class="w-full">
    @if($count > 0)
    <div x-data="btuiManageTabs('{{ json_encode($tabshow) }}')" x-init="init()" x-cloak class="tabs-wrap-{{ $axis }}">
        <div class="tabs-{{ $axis }}{{ $axis == 'x' ? '-'.$align : '' }}">
            @foreach ($tabs as $tab )
            <div @click="selectTab('{{ $tab }}')" class="tab-{{ $axis }} tab-md " :class="(tabs['{{ $tab }}'] == true) ? ' tab-{{ $theme }}-active ' : 'tab-{{ $theme }}' ">
                {{ $tab }}
            </div>
            @endforeach
        </div>
        <div class="{{ ($contentClass == '') ? 'tab-content-'.$axis.' tab-content-'.$theme : $contentClass }}">
            @foreach ($tabs as $tab)
            <div x-show.transition.in.duration.300ms.opacity.50="tabs.{{ $tab }}" class="">
                {{ ${$tab} ?? '' }}
            </div>
            @endforeach
        </div>
    </div>
    @endif

</div>
<script>
    var btuiManageTabs = (tabsfromphp) => {

        return {

            tabs: tabsfromphp,

            tabshow: [],

            init() {
                this.tabs = JSON.parse(this.tabs);
            },

            selectTab(tab) {
                Object.keys(this.tabs).forEach(el => {
                    this.tabs[el] = (tab == el) ? true : false;
                });
            }

        }

    }

</script>
