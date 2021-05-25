<div class="w-full">
    @if($count == 0)
        <x-btui-alert text="No tabs! Add some!" type="warning" closable="true" />
    @else
    <div x-data="btuiManageTabs('{{ json_encode($tabshow) }}')" x-init="init()" x-cloak class="{{ $tstyle['bg'] }} my-4">
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
