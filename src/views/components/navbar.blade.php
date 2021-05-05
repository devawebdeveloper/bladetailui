<div>
    <div class="{{ $bg . $shadow }}">
        <div class="container mx-auto">
            
            <div class="flex items-center justify-content {{ $sCss[$size] }} ">
                
                {{-- sitename --------------- --}}
                <div class="w-full lg:w-3/12">
                    <h1 class="{{ $tCss[$size] }}">
                        <a href="/" class="block">
                            {{ $sitename ?? "" }}
                        </a>
                    </h1>
                    
                </div>

                {{-- right side nav links section ------------- --}}
                
                <div class="flex justify-between w-full lg:w-9/12">
                    {{ $right ?? "Menu Area!" }}
                </div>

            </div>
            
            
            
        </div>
    </div>
</div>