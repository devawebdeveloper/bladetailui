<div>
    
    <div class="">
        @if($total == 0)
            <div class="p-4 text-center text-white bg-red-600">
                Nav Links Total Count is 0
            </div>
        @else
                <div class="{{ $align == 'x' ? 'flex justify-left flex-wrap gap-2' : '' }} divide-opacity-30 capitalize  {{ btui($color)->text()->get() }}">
                    
                    @if($type == 'slot')

                        @for ($i=1; $i <= $total; $i++)
                            <div>
                                {{ ${'link'.$i} ?? '' }}
                            </div>
                        @endfor

                    @elseif($type == 'array')

                        @foreach ($links as $label => $link)
                            <div class="">
                                <a href="{{ $link }}" 
                                    class="{{ $linkStyle }}">
                                    <div class="flex items-center justify-between gap-5">
                                        <span class="flex items-center justify-start gap-3">
                                            @if(isset(${$label.'icon'}))
                                            <span class="">
                                                {{ ${$label.'icon'} ?? '' }}
                                            </span>
                                            @endif
                                             <span>{{ $label }}</span>   
                                        </span>
                                        @if(isset(${$label.'badge'}))
                                        <span class="float-right px-2 rounded {{ btui($color)->bg(600)->text()->get() }}">
                                            {{ ${$label.'badge'} ?? '' }}
                                        </span>
                                        @endif
                                    </div>
                                    
                                    </a>
                            </div>
                        @endforeach
                        
                    @endif
                    
                </div>

        @endif
    </div>
    
</div>