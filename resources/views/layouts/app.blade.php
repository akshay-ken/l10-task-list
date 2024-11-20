<!DOCTYPE html>
<html>

    <head>
        <title>Laravel 10 Task list app</title>
        {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
        <script src="https://cdn.tailwindcss.com"></script>
        <style type="text/tailwindcss">
            label {
                @apply block uppercase text-slate-700 mb-2
            }

            input, textarea {
                @apply shadow-lg appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
            }

            .error {
                @apply text-red-500 text-sm
            }
        </style>
        @yield('styles')
    </head>

    <body class="container mx-auto mt-10 max-w-lg">
        <h1 class="mb-4 text-2xl">@yield('title')</h1>
        <div>
            @if (session()->has('success'))
                <div>{{ session('success') }}</div>
            @endif
            @yield('content')
        </div>
    </body>

</html>
