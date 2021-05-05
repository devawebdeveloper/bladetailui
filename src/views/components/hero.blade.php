<div>
   <div class="w-full {{ $bg ?? 'bg-blue-600 text-white' }}" >
       <div class="container mx-auto">
           <div class="flex items-center justify-{{ $justify }} px-14" style="min-height: 400px;">
            <div class="w-full text-{{ $textalign }} lg:w-{{ $width }}/12">

                <h1 class="text-5xl ">{{ $title ?? "" }}</h1> <br/>
                <h3 class="-mt-5 text-3xl" >{{ $subtitle ?? "" }}</h3> <br/> 
                <p class="-mt-4 text-base">{{ $description ?? "" }}</p> <br/>
                <div class="">
                    {{ $button ?? "" }}
                </div>
                
            </div>
            
           </div>
       </div>
   </div>
</div>