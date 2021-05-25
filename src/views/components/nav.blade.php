<div>
    
    <div class="">
        @if($total > 0)
                <div class="{{ $align == 'x' ? 'flex justify-left flex-wrap gap-2' : '' }} divide-opacity-30 capitalize  {{ btui($color)->text()->get() }}">

                        @for ($i=1; $i <= $total; $i++)
                            <div>
                                {{ ${'link'.$i} ?? '' }}
                            </div>
                        @endfor
                    
                </div>

        @endif
    </div>
    
</div>