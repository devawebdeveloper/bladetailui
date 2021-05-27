<div>
    
    <div class="">
        @if($total > 0)
                <div class="nav-{{ $align }} nav-{{ $color }} nav-{{ $size }} {{ $class }}">

                        @for ($i=1; $i <= $total; $i++)
                            <div class="nav-link">
                                {{ ${'link'.$i} ?? '' }}
                            </div>
                        @endfor
                    
                </div>

        @endif
    </div>
    
</div>