<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hot Quotes</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
   <x-navbar/>
   <div class="relative content flex flex-col md:flex-row justify-between">
        {{-- <div class="advertisement bg-blue-500 md:min-h-screen md:w-80 min-w-screen order-1 md:order-2 h-20">
            <p>sa</p>
        </div> --}}
        <div class="flex flex-col items-center quotes min-h-screen md:w-1/2 min-w-screen order-2 md:order-1 mt-10">
            @foreach($quotes as $quote)
                <x-quote
                    :quote="$quote->quote"
                    :writer="$quote->writer"
                    :likes="$quote->likes"
                    :reports="$quote->reports"
                    :date="$quote->created_at"
                    :id="$quote->id"
                />
            @endforeach
            <div class="pagination mt-4">
                {{ $quotes->links() }}
            </div>
        </div>
   </div>
</body>
</html>
