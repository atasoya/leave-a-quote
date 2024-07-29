<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
   <x-navbar/>
   <div class="content flex justify-between">
        <div class="quotes min-h-screen w-1/2 bg-red-500">
            <x-quote/>
        </div>
        <div class="advertisement bg-blue-500 min-h-screen w-80 ">

        </div>
   </div>
</body>
</html>