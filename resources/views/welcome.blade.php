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
   <div class="content flex flex-col md:flex-row justify-between">
        <div class="advertisement bg-blue-500 md:min-h-screen md:w-80 min-w-screen order-1 md:order-2 h-20">
            <p>sa</p>
        </div>
        <div class="quotes min-h-screen md:w-1/2 min-w-screen bg-red-500 order-2 md:order-1">
            <x-quote/>
        </div>
   </div>
</body>
</html>