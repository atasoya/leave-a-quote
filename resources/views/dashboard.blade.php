<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leave a Quote</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.fa-trash').forEach(function (trashIcon) {
                trashIcon.addEventListener('click', function () {
                    const quoteId = this.closest('.quote-card').id;
                    if (confirm('Are you sure you want to delete this quote?')) {
                        fetch(`/quote/${quoteId}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            credentials: 'same-origin'
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.message === 'Quote deleted successfully') {
                                document.getElementById(quoteId).remove();
                            } else {
                                alert(data.message);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('An error occurred while deleting the quote.');
                        });
                    }
                });
            });
        });
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="navbar bg-neutral text-neutral-content">
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="Add" class="btn btn-ghost lg:hidden">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h8m-8 6h16" />
              </svg>
            </div>
            <ul
              tabindex="0"
              class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
              <li class="text-black"><a href="/dashboard">Admin Dashboard</a></li>
            </ul>
          </div>
          <a class="btn btn-ghost text-xl" href="/">Leave a Quote</a>
        </div>
        <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal px-1">
            <li><a href="/logout">Admin Dashboard</a></li>
          </ul>
        </div>
        <div class="navbar-end">
            
          <a class="btn" href="/logout">Logout</a>
        </div>
      </div>
   <div class="relative content flex flex-col md:flex-row justify-between">
        {{-- <div class="advertisement bg-blue-500 md:min-h-screen md:w-80 min-w-screen order-1 md:order-2 h-20">
            <p>sa</p>
        </div> --}}
        <div class="flex flex-col items-center quotes min-h-screen md:w-1/2 min-w-screen order-2 md:order-1 mt-10">
            @foreach($quotes as $quote)
                <x-admin-quote
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
