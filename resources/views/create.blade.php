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
   <div class="content flex flex-col items-center  min-h-screen mt-4">
        <h1 class="text-2xl font-bold mb-6">Create a New Quote</h1>
        <form action="{{ route('quotes.store') }}" method="POST" class="w-full max-w-md flex flex-col items-center">
            @csrf
            <label class="form-control w-full max-w-xs">
                <div class="label">
                  <span class="label-text font-bold">Writer</span>
                </div>
                <input type="text" name="writer" id="writer" placeholder="Type here" class="input input-bordered input-primary w-full max-w-xs mb-4" />

            </label>
            <div class="mb-4">
                <label for="quote" class="block text-gray-700 text-sm font-bold mb-2">Quote</label>
                <textarea name="quote" id="quote" class="textarea textarea-primary" placeholder="Quote"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
     
        </form>
   </div>
</body>
</html>
