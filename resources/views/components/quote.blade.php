<div class="quote-card  w-96 flex flex-col h-fit space-y-1">
    <div class="quote-header flex space-x-2">
        <p class="font-bold text-sm">
            {{$writer}}
        </p>
        <span class="text-sm">•</span>
        <p class="font-ligt text-sm">
            {{$date->diffForHumans()}}
        </p>
    </div>
    <div class="quote">
        <p class="italic">
           {{$quote}}
        </p>
    </div>
    <div class="interracrions space-x-2">
        <i class="fa-regular fa-heart hover:cursor-pointer"></i>
        <i class="fa-regular fa-flag hover:cursor-pointer"></i>
    </div>
    <div class="divider"></div>
</div>