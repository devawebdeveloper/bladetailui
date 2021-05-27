<div class="m-1" x-data="{open:true}" x-on:btuialert.window="">

    <div x-show.transition="open" class=" alert {{ $type }}">
        <div class="alert-content">

            <span class="alert-icon ">
                <i class="{{ $icon }}"></i>
            </span>

            <div class="alert-text ">
                <p class="">
                    {{ $text }}</p>
            </div>

        </div>
        @if($closable)
        <div class="alert-closebutton">

            <span x-on:click="open = false" class="">&times</span>

        </div>
        @endif
    </div>

</div>
