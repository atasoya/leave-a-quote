<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Quote</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
   <x-navbar/>
   <div class="content flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-2xl font-bold mb-6">Create a New Quote</h1>
        <form action="{{ route('quotes.store') }}" method="POST" class="w-full max-w-md">
            @csrf
            <div class="mb-4">
                <label for="writer" class="block text-gray-700 text-sm font-bold mb-2">Writer</label>
                <input type="text" name="writer" id="writer" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="quote" class="block text-gray-700 text-sm font-bold mb-2">Quote</label>
                <textarea name="quote" id="quote" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
            </div>
            <div class="mb-4">
                <label for="likes" class="block text-gray-700 text-sm font-bold mb-2">Likes</label>
                <input type="number" name="likes" id="likes" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="reports" class="block text-gray-700 text-sm font-bold mb-2">Reports</label>
                <input type="number" name="reports" id="reports" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Quote</button>
            </div>
        </form>
   </div>
</body>
</html>
