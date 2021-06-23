<div>
    <div {{ $attributes }}>
        <div class="container mx-auto">
            
            <div class="flex items-center justify-between p-2">
                
                {{-- sitename --------------- --}}
                <div class="w-full lg:w-3/12">
                    
                    <h1 class="text-2xl">
                        <a href="/" class="block {{ $titleClass }}">
                            {{ $sitename ?? "" }}
                        </a>
                    </h1>
                    
                </div>

                {{-- right side nav links section ------------- --}}
                
                <div class="flex justify-end w-full lg:w-9/12">
                    {{ $right ?? "Menu Area!" }}
                </div>

            </div>
            
            
            
        </div>
    </div>
</div>