<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>


    <div class="quote-card w-96 flex flex-col h-fit space-y-1" id="{{$id}}">
        <div class="quote-header flex space-x-2">
            <p class="font-bold text-sm">
                {{$writer}}
            </p>
            <span class="text-sm">•</span>
            <p class="font-light text-sm">
                {{$date->diffForHumans()}}
            </p>
        </div>
        <div class="quote">
            <p class="italic">
                "{{$quote}}"
            </p>
        </div>
        <div class="interactions space-x-2">
           <i class="fa-solid fa-trash hover:cursor-pointer"></i>
        </div>
        <div class="divider"></div>
    </div>


</body>
</html>
